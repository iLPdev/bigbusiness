<?php  
	defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeBigBusinessPackage extends Package {

	protected $pkgHandle = 'theme_big_business';
	protected $appVersionRequired = '5.5.1';
	protected $pkgVersion = '0.9.8';

	public function getPackageDescription() {
		return t("Installs the Big Business Theme.");
	}

	public function getPackageName() {
		return t("Big Business");
	}

	public function install() {
		$pkg = parent::install();

		// install Theme
		PageTheme::add('theme_big_business', $pkg);

		// install Page Types
		Loader::model('collection_types');

		$ct = CollectionType::getByHandle('left_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'left_sidebar';
			$data['ctName'] = t('Left Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}

		$ct = CollectionType::getByHandle('right_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'right_sidebar';
			$data['ctName'] = t('Right Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}

		$ct = CollectionType::getByHandle('full');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'full';
			$data['ctName'] = t('Full');
			$hpt = CollectionType::add($data, $pkg);
		}

		$ct = CollectionType::getByHandle('blog_entry');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'blog_entry';
			$data['ctName'] = t('Blog Entry');
			$hpt = CollectionType::add($data, $pkg);
		}

	}

	public function uninstall(){ return parent::uninstall();}
	
}