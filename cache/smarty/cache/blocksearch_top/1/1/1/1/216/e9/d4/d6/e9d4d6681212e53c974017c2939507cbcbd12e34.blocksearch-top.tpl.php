<?php /*%%SmartyHeaderCode:264058b5a068a94259-94608576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d4d6681212e53c974017c2939507cbcbd12e34' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1488293792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264058b5a068a94259-94608576',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b5a1aa3fcab8_16583252',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b5a1aa3fcab8_16583252')) {function content_58b5a1aa3fcab8_16583252($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//dieselpoint.loc/ru/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
