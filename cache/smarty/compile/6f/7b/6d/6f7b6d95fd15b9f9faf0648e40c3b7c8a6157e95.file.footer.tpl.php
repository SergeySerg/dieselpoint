<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 22:39:00
         compiled from "E:\Webserver\domains\dieselpoint.loc\admin870x9da7l\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2620058b882e4101615-33742962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7b6d95fd15b9f9faf0648e40c3b7c8a6157e95' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\admin870x9da7l\\themes\\default\\template\\footer.tpl',
      1 => 1488298793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2620058b882e4101615-33742962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'php_errors' => 0,
    'modals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b882e41402e2_99527353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b882e41402e2_99527353')) {function content_58b882e41402e2_99527353($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }} ?>
