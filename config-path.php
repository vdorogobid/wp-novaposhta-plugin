<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 16.01.17
 * Time: 9:50 PM
 */

define("WPNOVAPOSHTA_PlUGIN_DIR", plugin_dir_path(__FILE__));
define("WPNOVAPOSHTA_PlUGIN_URL", plugin_dir_url( __FILE__ ));
define("WPNOVAPOSHTA_PlUGIN_SLUG", preg_replace( '/[^\da-zA-Z]/i', '_',  basename(WPNOVAPOSHTA_PlUGIN_DIR)));
define("WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN", str_replace( '_', '-', WPNOVAPOSHTA_PlUGIN_SLUG ));
define("WPNOVAPOSHTA_PlUGIN_OPTION_VERSION", WPNOVAPOSHTA_PlUGIN_SLUG.'_version');
define("WPNOVAPOSHTA_PlUGIN_OPTION_NAME", WPNOVAPOSHTA_PlUGIN_SLUG.'_options');
define("WPNOVAPOSHTA_PlUGIN_AJAX_URL", admin_url('admin-ajax.php'));

if ( ! function_exists( 'get_plugins' ) ) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$TPOPlUGINs = get_plugin_data(WPNOVAPOSHTA_PlUGIN_DIR.'/'.basename(WPNOVAPOSHTA_PlUGIN_DIR).'.php', false, false);

define("WPNOVAPOSHTA_PlUGIN_VERSION", $TPOPlUGINs['Version']);
define("WPNOVAPOSHTA_PlUGIN_NAME", $TPOPlUGINs['Name']);

define("WPNOVAPOSHTA_PlUGIN_DIR_LOCALIZATION", plugin_basename(WPNOVAPOSHTA_PlUGIN_DIR.'/languages/'));