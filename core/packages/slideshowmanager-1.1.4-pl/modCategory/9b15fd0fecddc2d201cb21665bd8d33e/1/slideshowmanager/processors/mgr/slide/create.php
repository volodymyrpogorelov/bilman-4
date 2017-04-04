<?php
/**
 * package CMP
 * subpackage processors
 * This file needs to be customized
 */
/**
 * @package CMP
 * @subpackage processors
 * This file needs to be customized
 */

if ( empty($scriptProperties['title']) ) {
    $modx->error->addField('title',$modx->lexicon('slideshowmanager.slide_err_required'));
}
if ( empty($scriptProperties['description']) ) {
    $modx->error->addField('description',$modx->lexicon('slideshowmanager.slide_err_required'));
} 
if ( empty($scriptProperties['start_date']) ) {
    $modx->error->addField('start_date',$modx->lexicon('slideshowmanager.slide_err_required'));
}
if ( empty($scriptProperties['end_date']) ) {
    $modx->error->addField('end_date',$modx->lexicon('slideshowmanager.slide_err_required'));
}
if ( empty($scriptProperties['slide_status']) ) {
    $modx->error->addField('slide_status',$modx->lexicon('slideshowmanager.slide_err_required'));
}
if ( empty($scriptProperties['sequence'])  ) {
    $modx->error->addField('sequence',$modx->lexicon('slideshowmanager.slide_err_required'));
}
$scriptProperties['slide_status'] = strtolower($scriptProperties['slide_status']);

if ($modx->error->hasError()) {
    return $modx->error->failure();
}

require_once MODX_CORE_PATH.'components/slideshowmanager/model/slideshowmanager/jgslideshow.class.php';
$jgSlideshow = new jgSlideshow($modx);

$slide = $modx->newObject('jgSlideshowSlide');

// fix date formats: 
if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    $sdate = DateTime::createFromFormat($modx->getOption('manager_date_format', null, 'Y-m-d'), $scriptProperties['start_date']);
    $scriptProperties['start_date'] = $sdate->format('Y-m-d');
    $edate = DateTime::createFromFormat($modx->getOption('manager_date_format', null, 'Y-m-d'), $scriptProperties['end_date']);
    $scriptProperties['end_date'] = $edate->format('Y-m-d');
} else {
    $scriptProperties['start_date'] = date('Y-m-d', $sdate = strtotime( $scriptProperties['start_date']));
    $scriptProperties['end_date'] = date('Y-m-d', $edate = strtotime( $scriptProperties['end_date']));
}
if ( $sdate > $edate ) {
    $modx->error->addField('end_date', $modx->lexicon('slideshowmanager.slide_err_end_date'));
    return $modx->error->failure();
}

$slide->fromArray($scriptProperties);

require_once $jgSlideshow->config['modelPath'].'fileuploader.class.php';

$uploader = new Fileuploader($modx);

//echo print_r($_FILES['upload_file']['tmp_name']);
// upload image:
if( isset($_FILES['upload_file']['tmp_name']) && strlen($_FILES['upload_file']['tmp_name']) > 4 ) {
    // validate the file:
    // load the album data NEED THIS!
    $album_id = $scriptProperties['album_id'];
    $slideAlbum = $modx->getObject('jgSlideshowAlbum', array('id' => $album_id));
    $album_data = array();
    $file_allowed = array();
    if ( is_object($slideAlbum) ) {
        $album_data = $slideAlbum->toArray();
        // replace the | with a comma
        $tmp = explode( ',', str_replace('|',',',$album_data['file_allowed']));
        foreach( $tmp as $ext ) {
            if ( empty($ext)){
                continue;
            }
            $file_allowed[] = trim($ext);
        }
    }
    
    // set the file upload rules - name, file size, allowed extentions
    $uploader->setFileRules('upload_file', 
            $album_data['file_size_limit'], 
            $file_allowed, 
            $album_data['file_width'], 
            $album_data['file_height'], 
            $jgSlideshow->config['uploadPath'].'tmp/',
            $album_data['constrain']
        );
    
    if ( $uploader->checkFile('upload_file') ) {
        // passed so continue to upload
        // just the file name
        $file_path = str_replace( 
                $jgSlideshow->config['uploadPath'], '', 
                $uploader->moveFile(
                    'upload_file', 
                    $jgSlideshow->config['uploadPath'], 
                    'album_'.$album_data['id'].'_slide_'.time() 
                ) 
            );
        $slide->set('file_type', $uploader->fileExt('upload_file'));
        
        // $slide->set('file_size', filesize($file_data['file']));
        // $input_data['date_time'];
        
        $slide->set('file_path', $file_path);
        
    } else {
        // failed give reason why:
         $modx->error->addField('upload_file',$modx->lexicon('slideshowmanager.slide_err_required'));
         return $modx->error->failure();
    }
} else {
    // failed give reason why:
    //print_r($_FILES);
    $modx->error->addField('upload_file',$modx->lexicon('slideshowmanager.slide_err_required'));
    return $modx->error->failure();
}
// set time defaults:
$time = date('Y-m-d g:h:s');
$slide->set('edit_time', $time);
$slide->set('upload_time', $time);
// adjust the slide_status
if ( $scriptProperties['slide_status'] == 'insert' ) {
    /*
     * @todo reorder sequence in date is today
     */
    $slide->set('slide_status', 'live');
} else if ( $scriptProperties['slide_status'] == 'replace' ) {
    /*
     * @TODO remove slide with same sequence and place in archive if date is today
     */
    $replaceSlide = '';
    $slide->set('slide_status', 'live');
}
$slide->set('slideshow_album_id', $album_id);

/* save */
if ($slide->save() == false) {
    return $modx->error->failure($modx->lexicon('slideshowmanager.slide_err_save'));
} 
// now update sequence
require_once $jgSlideshow->config['modelPath'].'sequence.class.php';
$today = date("Y-m-d");
$Sequence = new Sequence($modx, 'jgSlideshowSlide' );
$Sequence->addConditions(
    array(
        'slideshow_album_id' => $album_id, 
        'slide_status' => 'live',
        'start_date:<=' => $today,
        'end_date:>=' => $today
    ));
$Sequence->order($slide->get('id'), $slide->get('sequence'));


return $modx->error->success('',$slide);