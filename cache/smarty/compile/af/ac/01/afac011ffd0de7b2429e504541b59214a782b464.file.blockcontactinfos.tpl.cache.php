<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 21:19:19
         compiled from "E:\Webserver\domains\dieselpoint.loc\themes\dieselpoint\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2796858bf07b70309a0-12661422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afac011ffd0de7b2429e504541b59214a782b464' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1488491664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2796858bf07b70309a0-12661422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf07b7094306_47656549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf07b7094306_47656549')) {function content_58bf07b7094306_47656549($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'E:\\Webserver\\domains\\dieselpoint.loc\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>
            	<li>
            		<i class="icon-map-marker"></i><?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
