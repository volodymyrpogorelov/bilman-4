<?php /* Smarty version 3.1.27, created on 2017-03-23 15:05:13
         compiled from "/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:196308524958d3e429aefea6_56838098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52eb4fae640c9fe273423ce5e586fa8eb0180ae' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/manager/templates/default/element/chunk/update.tpl',
      1 => 1486532272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196308524958d3e429aefea6_56838098',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d3e429af0a18_04396717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d3e429af0a18_04396717')) {
function content_58d3e429af0a18_04396717 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '196308524958d3e429aefea6_56838098';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>