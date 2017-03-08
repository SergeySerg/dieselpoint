<div class="bootstrap">
	<nav id="{if $employee->bo_menu}nav-sidebar{else}nav-topbar{/if}" role="navigation">
		{if !$tab}
			<div class="mainsubtablist" style="display:none;"></div>
		{/if}
		<ul class="menu">
			<li class="searchtab">
				{include file="search_form.tpl" id="header_search" show_clear_btn=1}
			</li>
			{foreach $tabs as $t}
				{if $t.active}
				<li class="maintab {if $t.current}active{/if} {if $t.sub_tabs|@count}has_submenu{/if}" id="maintab-{$t.class_name}" data-submenu="{$t.id_tab}">
					<a href="{if $t.sub_tabs|@count && isset($t.sub_tabs[0].href)}{$t.sub_tabs[0].href|escape:'html':'UTF-8'}{else}{$t.href|escape:'html':'UTF-8'}{/if}" class="title" >
						<i class="icon-{$t.class_name}"></i>
						<span>{if $t.name eq ''}{$t.class_name|escape:'html':'UTF-8'}{else}{$t.name|escape:'html':'UTF-8'}{/if}</span>
					</a>
					{if $t.sub_tabs|@count}
						<ul class="submenu">
						{foreach from=$t.sub_tabs item=t2}
							{if $t2.active}
							<li id="subtab-{$t2.class_name|escape:'html':'UTF-8'}" {if $t2.current} class="active"{/if}>
								<a href="{$t2.href|escape:'html':'UTF-8'}">
									{if $t2.name eq ''}{$t2.class_name|escape:'html':'UTF-8'}{else}{$t2.name|escape:'html':'UTF-8'}{/if}
								</a>
							</li>
							{/if}
						{/foreach}
						</ul>
					{/if}
				</li>
				{/if}
			{/foreach}

			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminModules&token=54a91d53ad796cffc6e73d5dc19ec40e&configure=blocksocial&tab_module=front_office_features&module_name=blocksocial' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Редактор Соц. сетей</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminModules&token=54a91d53ad796cffc6e73d5dc19ec40e&configure=blocklayered&tab_module=front_office_features&module_name=blocklayered&edit_filters_template=1&id_layered_filter=2' class="title" >
					<i class="icon-AdminTools"></i>
					<span>Фильтр категорий</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminModules&token=54a91d53ad796cffc6e73d5dc19ec40e&configure=blockcontactinfos&tab_module=front_office_features&module_name=blockcontactinfos' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Изменить конт. телефон</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminModules&token=54a91d53ad796cffc6e73d5dc19ec40e&configure=homeslider&tab_module=front_office_features&module_name=homeslider' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Редактор слайдера</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminCmsContent&token=2c163c7527a732fad25a44fcca9377da' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Редактор страниц</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin870x9da7l/index.php?controller=AdminCurrencies&token=9769d02d41f682dd6178a1e31616861d' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Редактор валют</span>
				</a>
			</li>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		{hook h='displayAdminNavBarBeforeEnd'}
	</nav>
</div>
