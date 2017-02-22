<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 16.01.17
 * Time: 6:53 PM
 */
namespace includes;

use includes\common\WPNovaPoshtaDefaultOption;
use includes\common\WPNovaPoshtaLoader;
use includes\models\admin\menu\WPNovaPoshtaGuestBookSubMenuModel;


class WPNovaPoshtaPlugin
{
    private static $instance = null;
    private function __construct() {
        WPNovaPoshtaLoader::getInstance();
        add_action('plugins_loaded', array(&$this, 'setDefaultOptions'));
    }
    public static function getInstance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }

     /**
      * Если не созданные настройки установить по умолчанию
      */
     public function setDefaultOptions(){
         if( ! get_option(WPNOVAPOSHTA_PlUGIN_OPTION_NAME) ){
             update_option( WPNOVAPOSHTA_PlUGIN_OPTION_NAME, WPNovaPoshtaDefaultOption::getDefaultOptions() );
         }
         if( ! get_option(WPNOVAPOSHTA_PlUGIN_OPTION_VERSION) ){
             update_option(WPNOVAPOSHTA_PlUGIN_OPTION_VERSION, WPNOVAPOSHTA_PlUGIN_VERSION);
         }
     }
    
    static public function activation()
    {
        // debug.log
        error_log('plugin '.WPNOVAPOSHTA_PlUGIN_NAME.' activation');
        //Создание таблицы Гостевой книги
        WPNovaPoshtaGuestBookSubMenuModel::createTable();
    }

    static public function deactivation()
    {
        // debug.log
        error_log('plugin '.WPNOVAPOSHTA_PlUGIN_NAME.' deactivation');
         delete_option(WPNOVAPOSHTA_PlUGIN_OPTION_NAME);
         delete_option(WPNOVAPOSHTA_PlUGIN_OPTION_VERSION);
    }

}

WPNovaPoshtaPlugin::getInstance();
