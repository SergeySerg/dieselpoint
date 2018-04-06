<?php

/*
*  @author Ilia Ilin <admin@blogun.biz>
*  @copyright  2013
*  @version  1.0
*/

if (!defined('_PS_VERSION_'))
	exit;


class BlockHomecategorys extends Module
{
	public function __construct()
	{
		$this->name = 'blockhomecategorys';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'ILIL';

		parent::__construct();

		$this->displayName = $this->l('Categories block');
		$this->description = $this->l('Adds a block categories to Homepage.');
		$this->l('Title');
	}

	function install()
	{
	    if (!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displayHome'))
		return false;
	    return true;
	}

        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS(_THEME_CSS_DIR_.'category.css', 'all');
        }
        
	public function hookDisplayHome($params)
	{
		$categoryRoot = new Category(Configuration::get('PS_HOME_CATEGORY'),$this->context->language->id,$this->context->shop->id);
		$categoriesHome = $categoryRoot->getSubCategories($this->context->language->id);
		$categoriesHomeWithHidden = $categoryRoot->getSubCategoriesForIndex($this->context->language->id);
		//print_r($categoriesHomeWithHidden);
		$this->smarty->assign(array(
			'subcategories' => $categoriesHome,
			'subcategoriesHidden' => $categoriesHomeWithHidden,
			'homeSize' => Image::getSize('medium_default')
		));

		return $this->display(__FILE__, 'blockhomecategorys.tpl');
	}

}
