<?php /*%%SmartyHeaderCode:2159458b5a0699388f4-49994189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76bd805506d90461d90ea1fee02a2569c841ce84' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1488293792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2159458b5a0699388f4-49994189',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b5a18c2c98b2_25305535',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b5a18c2c98b2_25305535')) {function content_58b5a18c2c98b2_25305535($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://dieselpoint.loc/ru/manufacturers" title="Производители">
						Производители
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://dieselpoint.loc/ru/1_fashion-manufacturer" title="Подробнее о Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Все производители</option>
													<option value="http://dieselpoint.loc/ru/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
