<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 16.01.17
 * Time: 6:53 PM
 */
namespace includes;

use includes\common\WPNovaPoshtaLoader;


class WPNovaPoshtaPlugin
{
    private static $instance = null;
    private function __construct() {
        WPNovaPoshtaLoader::getInstance();
    }
    public static function getInstance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }

    static public function activation()
    {
        // debug.log
        error_log('plugin '.WPNOVAPOSHTA_PlUGIN_NAME.' activation');
    }

    static public function deactivation()
    {
        // debug.log
        error_log('plugin '.WPNOVAPOSHTA_PlUGIN_NAME.' deactivation');
    }

}

WPNovaPoshtaPlugin::getInstance();
