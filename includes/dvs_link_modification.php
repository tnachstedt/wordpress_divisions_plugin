<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of link_modification
 *
 * @author timo
 */
class dvs_LinkModification {

	const TRANSIENT_REWRITE_FLUSH_SCHEDULED = "dvs_rewrite_flush_scheduled";

	public static function register_hooks()
	{
		# register actions
		add_action('admin_init', array(__CLASS__, 'admin_init'));
	}

	/**
	 * hook into WP's admin_init action hook
	 */
	public static function admin_init()
	{
	    if (delete_transient(self::TRANSIENT_REWRITE_FLUSH_SCHEDULED))
		{
			flush_rewrite_rules();
		}

	}

	public static function add_division_to_url($url, $division_id)
	{
		if (dvs_Settings::get_use_permalinks()
			&& get_option('permalink_structure'))
		{
			$site_url = get_site_url();
			$post_data = get_post($division_id, ARRAY_A);
			$slug = $post_data['post_name'];
			return $site_url
				. '/' . $slug
				. substr($url, strlen($site_url));
		}
		else
		{
			return add_query_arg(
				dvs_Constants::QUERY_ARG_NAME_DIVISION,
				$division_id,
				$url);
		}
	}

	public static function schedule_rewrite_rules_flush()
	{
		set_transient(self::TRANSIENT_REWRITE_FLUSH_SCHEDULED, TRUE);
	}
}