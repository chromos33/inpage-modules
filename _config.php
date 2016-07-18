<?php
define('INPAGE_MODULES_DIR', basename(__DIR__));

CMSMenu::remove_menu_item('ContentModuleMain');
CMSMenu::remove_menu_item('ContentModuleEditController');
CMSMenu::remove_menu_item('ContentModuleSettingsController');
CMSMenu::remove_menu_item('ContentModuleHistoryController');
CMSMenu::remove_menu_item('ContentModuleAddController');
CMSMenu::remove_menu_item('VisualEditor');
CMSMenu::remove_menu_item('VisualEditor_EditModule');
CMSMenu::remove_menu_item('VisualEditor_ManageModule');

LeftAndMain::require_css(INPAGE_MODULES_DIR . '/css/ContentModuleField.css');

if (class_exists('Translatable') && SiteTree::has_extension('Translatable')) {
	Config::inst()->update('ContentModule', 'extensions', array('ContentModuleLanguageExtension'));
	Config::inst()->update('ContentModuleField', 'extensions', array('ContentModuleFieldTranslatableExtension'));
	Config::inst()->update('SiteTree', 'extensions', array('ContentModuleSiteTreeTranslatableExtension'));
	Config::inst()->update('ContentModuleMain', 'extensions', array('ContentModuleMainTranslatableExtension'));
}