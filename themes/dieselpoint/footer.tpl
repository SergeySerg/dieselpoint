
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">{$HOOK_FOOTER}</div>
					</footer>
				</div><!-- #footer -->
			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
<!-- Start SiteHeart code -->
{literal}
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
{/literal}
{literal}<script type="text/javascript" src="/buyme/js/buyme.js"></script>{/literal}
<!-- End SiteHeart code -->

	</body>
</html>