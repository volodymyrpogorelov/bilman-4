<?php /* Smarty version 3.1.27, created on 2017-03-23 15:18:11
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:129280069358d3e733d6eda9_42346272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d65958b1aa9395c4d8d0b4509850441134c9015' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/snippet/update.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129280069358d3e733d6eda9_42346272',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d3e733d6f910_75495782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d3e733d6f910_75495782')) {
function content_58d3e733d6f910_75495782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '129280069358d3e733d6eda9_42346272';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>