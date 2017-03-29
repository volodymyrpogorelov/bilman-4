<?php /* Smarty version 3.1.27, created on 2017-03-23 09:26:24
         compiled from "/home/pogorelov/Tmp/tmp/modx/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:132376389058d394c0ab5ca1_55182525%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c745f004c1113a1c2ea22ae88c20301d031718e4' => 
    array (
      0 => '/home/pogorelov/Tmp/tmp/modx/setup/templates/footer.tpl',
      1 => 1486532274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132376389058d394c0ab5ca1_55182525',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d394c0aba301_54902426',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d394c0aba301_54902426')) {
function content_58d394c0aba301_54902426 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pogorelov/Tmp/tmp/modx/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '132376389058d394c0ab5ca1_55182525';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>