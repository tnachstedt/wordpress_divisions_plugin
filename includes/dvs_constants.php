<?php

if ( !class_exists( "dvs_Constants" ) )
{
	class dvs_Constants extends Walker_Nav_Menu_Edit {
		
		const DIVISION_REPLACED_NAV_MENUS_OPTION = 'replaced_nav_menus';
		const DIVISION_REPLACED_SIDEBARS_OPTIONS = 'replaced_sidebars';
		const DIVISION_POST_NAME = 'Division';
		const DIVISION_POST_NAME_PLURAL = 'Divisions';
		const DIVISION_POST_TYPE = 'dvs_division';
		
		const NAV_MENU_DIVSION_ENABLED_OPTION = 'dvs_division_enabled';
		const NAV_MENU_DIVISION_OPTION = 'dvs_division';
		const NAV_MENU_DIVISION_EDIT_NAME = 'edit-menu-item-division';
		
		
		const HEADER_IMAGE_MODE_OPTION = 'dvs_header_image_option';
		const HEADER_IMAGE_MODE_USE_DEFAULT = 'use_default';
		const HEADER_IMAGE_MODE_NO_IMAGE = 'none';
		const HEADER_IMAGE_MODE_REPLACE = 'replace';
		const HEADER_IMAGE_URL_OPTION = 'dvs_header_image_url';
		const HEADER_IMAGE_METABOX_SLUG = 'dvs_header_image_metabox';
		const HEADER_IMAGE_METABOX_TITLE = 'Individual Header Image';
	
		const REPLACED_NAV_MENUS_METABOX_SLUG = 'dvs_replaced_nav_menus_metabox';
		const REPLACED_NAV_MENUS_METABOX_TITLE = 'Individual Navigation Menu Locations';
		
		const REPLACED_SIDEBARS_METABOX_SLUG = 'dvs_replaced_sidebars_metabox';
		const REPLACED_SIDEBARS_METABOX_TITLE = 'Individual Sidebars';
		
		const QUERY_ARG_NAME_DIVISION = 'division';
		
		const CSS_CLASS_MENU_ITEM_CURRENT_DIVISION = 'current-division-item';
		
	};
}
?>
