<?php /* Smarty version 3.1.27, created on 2017-03-26 14:24:31
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:177640459358d7cf1f970736_89393393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '657f29f48c24116c00abf00692d9a984a6005646' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177640459358d7cf1f970736_89393393',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d7cf1f979a10_94255030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d7cf1f979a10_94255030')) {
function content_58d7cf1f979a10_94255030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '177640459358d7cf1f970736_89393393';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>