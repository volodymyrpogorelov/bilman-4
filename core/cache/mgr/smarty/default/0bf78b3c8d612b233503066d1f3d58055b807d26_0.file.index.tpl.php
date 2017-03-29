<?php /* Smarty version 3.1.27, created on 2017-03-23 09:44:27
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:80251911958d398fbe64cc6_26173383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf78b3c8d612b233503066d1f3d58055b807d26' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/workspaces/index.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80251911958d398fbe64cc6_26173383',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d398fbe664a7_74923961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d398fbe664a7_74923961')) {
function content_58d398fbe664a7_74923961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80251911958d398fbe64cc6_26173383';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>