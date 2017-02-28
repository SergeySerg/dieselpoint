<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 16:46:42
         compiled from "E:\Webserver\domains\dieselpoint.loc\themes\default-bootstrap\modules\cheque\views\templates\hook\payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1921458b57f42e428b0-67710422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0f1b569baf2db90e20d8c8fb9d78954f7a1ee3' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\payment_return.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921458b57f42e428b0-67710422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'chequeName' => 0,
    'chequeAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b57f42edcdd4_99271652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b57f42edcdd4_99271652')) {function content_58b57f42edcdd4_99271652($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok') {?>
	<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'cheque'),$_smarty_tpl);?>
</p>
	<div class="box order-confirmation">
		<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your check must include:','mod'=>'cheque'),$_smarty_tpl);?>
</h3>
		- <?php echo smartyTranslate(array('s'=>'Payment amount.','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br />- <?php echo smartyTranslate(array('s'=>'Payable to the order of','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeName']->value) {?><?php echo $_smarty_tpl->tpl_vars['chequeName']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<br />- <?php echo smartyTranslate(array('s'=>'Mail to','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeAddress']->value) {?><?php echo $_smarty_tpl->tpl_vars['chequeAddress']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)&&isset($_smarty_tpl->tpl_vars['id_order']->value)&&$_smarty_tpl->tpl_vars['id_order']->value) {?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'cheque'),$_smarty_tpl);?>

		<?php } else { ?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'cheque'),$_smarty_tpl);?>

		<?php }?>
		<br />- <?php echo smartyTranslate(array('s'=>'An email has been sent to you with this information.','mod'=>'cheque'),$_smarty_tpl);?>

		<br />- <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your payment.','mod'=>'cheque'),$_smarty_tpl);?>
</strong>
		<br />- <?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cheque'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</div>
<?php } else { ?>
	<p class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'cheque'),$_smarty_tpl);?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>
