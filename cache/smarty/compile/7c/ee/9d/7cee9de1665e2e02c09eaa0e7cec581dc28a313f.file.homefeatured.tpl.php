<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 16:59:42
         compiled from "E:\Webserver\domains\dieselpoint.loc\themes\dieselpoint\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181058b5905eb8c205-36674692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cee9de1665e2e02c09eaa0e7cec581dc28a313f' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1488293793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181058b5905eb8c205-36674692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b5905eba3283_07703033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b5905eba3283_07703033')) {function content_58b5905eba3283_07703033($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
