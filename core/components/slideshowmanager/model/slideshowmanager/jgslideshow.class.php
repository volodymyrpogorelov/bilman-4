<?php
/**
 * Slideshow Manager
 *
 * Copyright 2010 by Joshua Gulledge <jgulledge19@hotmail.com>
 *
 * This file is part of Slideshow Manager, a batch resource editing Extra.
 *
 * Slideshow Manager is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Slideshow Manager is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Slideshow Manager; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package slideshowmanager
 */
/**
 * @package slideshowmanager
 */
class jgSlideshow {

    function __construct(modX &$modx,array $config = array()) {
    	$this->modx =& $modx;
        $corePath = $modx->getOption('slideshowmanager.core_path',null,$modx->getOption('core_path').'components/slideshowmanager/');
        $assetsPath = $modx->getOption('slideshowmanager.assets_path',null,$modx->getOption('assets_path').'components/slideshowmanager/');
        $assetsUrl = $modx->getOption('slideshowmanager.assets_url',null,$modx->getOption('assets_url').'components/slideshowmanager/');

        $this->config = array_merge(array(
            'corePath' => $corePath,
            'chunksPath' => $corePath.'elements/chunks/',
            'modelPath' => $corePath.'model/',
            'processorsPath' => $corePath.'processors/',
            'uploadPath' => $assetsPath.'uploads/',

            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl.'connector.php',
            'cssUrl' => $assetsUrl.'css/',
            'jsUrl' => $assetsUrl.'js/',
            'imagesUrl' => $assetsUrl.'images/',
            'uploadUrl' => $assetsUrl.'uploads/',
        ),$config);

        $this->modx->addPackage('slideshowmanager',$this->config['modelPath']);
        if ($this->modx->lexicon) {
            $this->modx->lexicon->load('slideshowmanager:default');
        }
    }

    /**
     * Initializes slideshowmanager based on a specific context.
     *
     * @access public
     * @param string $ctx The context to initialize in.
     * @return string The processed content.
     */
    public function initialize($ctx = 'mgr') {
        $output = '';
        switch ($ctx) {
            case 'mgr':
                if (!$this->modx->loadClass('slideshowmanager.request.jgSlideshowControllerRequest',$this->config['modelPath'],true,true)) {
                    return 'Could not load controller request handler.';
                }
                $this->request = new jgSlideshowControllerRequest($this);
                $output = $this->request->handleRequest();
                break;
        }
        return $output;
    }
    
    /**
     * Gets a Chunk and caches it; also falls back to file-based templates
     * for easier debugging.
     *
     * @access public
     * @param string $name The name of the Chunk
     * @param array $properties The properties for the Chunk
     * @return string The processed content of the Chunk
     */
    public function getChunk($name,$properties = array()) {
        $chunk = null;
        if (!isset($this->chunks[$name])) {
            $chunk = $this->_getTplChunk($name);
            if (empty($chunk)) {
                $chunk = $this->modx->getObject('modChunk',array('name' => $name),true);
                if ($chunk == false) return false;
            }
            $this->chunks[$name] = $chunk->getContent();
        } else {
            $o = $this->chunks[$name];
            $chunk = $this->modx->newObject('modChunk');
            $chunk->setContent($o);
        }
        $chunk->setCacheable(false);
        return $chunk->process($properties);
    }

    /**
     * Returns a modChunk object from a template file.
     *
     * @access private
     * @param string $name The name of the Chunk. Will parse to name.chunk.tpl
     * @return modChunk/boolean Returns the modChunk object if found, otherwise
     * false.
     */
    private function _getTplChunk($name) {
        $chunk = false;
        $f = $this->config['chunksPath'].strtolower($name).'.chunk.tpl';
        if (file_exists($f)) {
            $o = file_get_contents($f);
            $chunk = $this->modx->newObject('modChunk');
            $chunk->set('name',$name);
            $chunk->setContent($o);
        }
        return $chunk;
    }
}
