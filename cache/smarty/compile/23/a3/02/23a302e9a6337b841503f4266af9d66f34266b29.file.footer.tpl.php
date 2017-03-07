<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 21:11:21
         compiled from "E:\Webserver\domains\dieselpoint.loc\themes\dieselpoint\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576358bf05d9348e09-72027182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a302e9a6337b841503f4266af9d66f34266b29' => 
    array (
      0 => 'E:\\Webserver\\domains\\dieselpoint.loc\\themes\\dieselpoint\\footer.tpl',
      1 => 1488491663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576358bf05d9348e09-72027182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf05d936e447_06054785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf05d936e447_06054785')) {function content_58bf05d936e447_06054785($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</footer>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Start SiteHeart code -->

	<script>
		(function(){
			var widget_id = 868866;
			_shcp =[{widget_id : widget_id}];
			var lang =(navigator.language || navigator.systemLanguage
			|| navigator.userLanguage ||"en")
					.substr(0,2).toLowerCase();
			var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
			var hcc = document.createElement("script");
			hcc.type ="text/javascript";
			hcc.async =true;
			hcc.src =("https:"== document.location.protocol ?"https":"http")
					+"://"+ url;
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hcc, s.nextSibling);
		})();
	</script>

<script type="text/javascript" src="/buyme/js/buyme.js"></script>
<!-- End SiteHeart code -->

	</body>
</html><?php }} ?>
