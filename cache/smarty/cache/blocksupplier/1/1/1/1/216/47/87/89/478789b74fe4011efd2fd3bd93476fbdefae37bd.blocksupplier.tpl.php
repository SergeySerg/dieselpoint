<?php /*%%SmartyHeaderCode:10358b5a069e7f612-52403975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478789b74fe4011efd2fd3bd93476fbdefae37bd' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1488293793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10358b5a069e7f612-52403975',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b5a18c52c8f5_28647807',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b5a18c52c8f5_28647807')) {function content_58b5a18c52c8f5_28647807($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://dieselpoint.loc/ru/supplier" title="Поставщики">
					Поставщики
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://dieselpoint.loc/ru/1__fashion-supplier" 
					title="Подробнее о Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Все поставщики</option>
													<option value="http://dieselpoint.loc/ru/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
