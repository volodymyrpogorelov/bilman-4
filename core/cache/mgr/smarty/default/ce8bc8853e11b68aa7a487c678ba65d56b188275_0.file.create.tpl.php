<?php /* Smarty version 3.1.27, created on 2017-03-23 16:13:13
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33386865358d3f419c290a4_60139336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8bc8853e11b68aa7a487c678ba65d56b188275' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/plugin/create.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33386865358d3f419c290a4_60139336',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d3f419c29c06_79442315',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d3f419c29c06_79442315')) {
function content_58d3f419c29c06_79442315 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33386865358d3f419c290a4_60139336';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>