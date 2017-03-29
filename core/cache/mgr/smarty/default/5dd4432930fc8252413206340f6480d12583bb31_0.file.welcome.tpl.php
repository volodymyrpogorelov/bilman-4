<?php /* Smarty version 3.1.27, created on 2017-03-23 09:26:53
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67148980458d394dddef5f8_56953036%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd4432930fc8252413206340f6480d12583bb31' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/welcome.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67148980458d394dddef5f8_56953036',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d394dddf03a7_50642023',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d394dddf03a7_50642023')) {
function content_58d394dddf03a7_50642023 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67148980458d394dddef5f8_56953036';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>