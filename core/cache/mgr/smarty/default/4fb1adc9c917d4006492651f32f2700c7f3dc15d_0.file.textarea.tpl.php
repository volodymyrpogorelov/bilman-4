<?php /* Smarty version 3.1.27, created on 2017-03-26 14:24:31
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/textarea.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76844671258d7cf1f947ba1_21053564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb1adc9c917d4006492651f32f2700c7f3dc15d' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/textarea.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76844671258d7cf1f947ba1_21053564',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d7cf1f95e781_69391038',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d7cf1f95e781_69391038')) {
function content_58d7cf1f95e781_69391038 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76844671258d7cf1f947ba1_21053564';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" rows="15"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textarea'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo strtr($_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>