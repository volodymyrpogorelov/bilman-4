<?php /* Smarty version 3.1.27, created on 2017-03-26 14:24:31
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/image.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:113198967958d7cf1fa040d5_83496167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2ec04d55ef5225caf14a87bb5026e2b3b33f14' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/image.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113198967958d7cf1fa040d5_83496167',
  'variables' => 
  array (
    'tv' => 0,
    '_config' => 0,
    'source' => 0,
    'disabled' => 0,
    'params' => 0,
    'ctx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d7cf1fa39144_94200814',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d7cf1fa39144_94200814')) {
function content_58d7cf1fa39144_94200814 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pogorelov/Tmp/tmp/modx/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '113198967958d7cf1fa040d5_83496167';
?>
<div id="tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"></div>
<div id="tv-image-preview-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-tv-image-preview">
    <?php if ($_smarty_tpl->tpl_vars['tv']->value->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
system/phpthumb.php?w=400&h=400&aoe=0&far=0&src=<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
&source=<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" alt="" /><?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'displayfield'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,renderTo: 'tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,msgTarget: 'under'
    
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'modx-panel-tv-image'
        ,renderTo: 'tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,relativeValue: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,wctx: '<?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['wctx'])===null||$tmp==='' ? '' : $tmp)) {
echo $_smarty_tpl->tpl_vars['params']->value['wctx'];
} else { ?>web<?php }?>'
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['openTo'])===null||$tmp==='' ? '' : $tmp)) {?>,openTo: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['params']->value['openTo'],"'","\\'");?>
'<?php }?>
        ,source: '<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
'
    
        ,msgTarget: 'under'
        ,listeners: {
            'select': {fn:function(data) {
                MODx.fireResourceFormChange();
                var d = Ext.get('tv-image-preview-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
                if (Ext.isEmpty(data.url)) {
                    d.update('');
                } else {
                    
                    d.update('<img src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
system/phpthumb.php?w=400&h=400&aoe=0&far=0&src='+data.url+'&wctx=<?php echo $_smarty_tpl->tpl_vars['ctx']->value;?>
&source=<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" alt="" />');
                    
                }
            }}
        }
    });
    MODx.makeDroppable(Ext.get('tv-image-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'),function(v) {
        var cb = Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
        if (cb) {
            cb.setValue(v);
            cb.fireEvent('select',{relativeUrl:v});
        }
        return '';
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php }

}
}
?>