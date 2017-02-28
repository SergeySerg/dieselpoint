<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 16:46:49
         compiled from "E:\Webserver\domains\dieselpoint.loc\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850958b57f49579f31-08724175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e56c181058074e3ce8dbf59389c53ee30524ae6' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850958b57f49579f31-08724175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b57f49592948_38110969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b57f49592948_38110969')) {function content_58b57f49592948_38110969($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\Webserver\\domains\\dieselpoint.loc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
