<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 21:07:46
         compiled from "E:\Webserver\domains\dieselpoint.loc\admin870x9da7l\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1104258bf050275f7c3-92147860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fce33e7930f46772f6bc4a70b267f8bd27670c' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\admin870x9da7l\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104258bf050275f7c3-92147860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf0502796c48_49870724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf0502796c48_49870724')) {function content_58bf0502796c48_49870724($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
