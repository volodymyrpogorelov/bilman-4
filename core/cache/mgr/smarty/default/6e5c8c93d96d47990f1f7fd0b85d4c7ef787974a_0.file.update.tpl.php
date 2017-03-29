<?php /* Smarty version 3.1.27, created on 2017-03-23 16:13:05
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:38529155058d3f4119eca00_53554415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5c8c93d96d47990f1f7fd0b85d4c7ef787974a' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/plugin/update.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38529155058d3f4119eca00_53554415',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d3f4119ed598_68466451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d3f4119ed598_68466451')) {
function content_58d3f4119ed598_68466451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38529155058d3f4119eca00_53554415';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>