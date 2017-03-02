<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 23:35:07
         compiled from "E:\Webserver\domains\dieselpoint.loc\modules\blockhomecategorys\blockhomecategorys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2342658b8900b8fd831-64093537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16dfd429129939eb9eab43edc08ae3faacbe536' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\modules\\blockhomecategorys\\blockhomecategorys.tpl',
      1 => 1488377145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2342658b8900b8fd831-64093537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'subcategory' => 0,
    'link' => 0,
    'mediumSize' => 0,
    'img_cat_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b8900b99fad9_69786886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8900b99fad9_69786886')) {function content_58b8900b99fad9_69786886($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
  

  <div id="subcategories">
    <ul class="inline_list">
      <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
	  <li class="clearfix">
	    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img">
	    <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium_default');?>
" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
	    <?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
	    <?php }?>
	    </a>
	    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="cat_name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
	  </li>
      <?php } ?>
    </ul>
    <br class="clear"/>
  </div>
<?php }?>
<?php }} ?>
