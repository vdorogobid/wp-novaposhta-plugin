<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 17.01.17
 * Time: 1:46 AM
 */
namespace includes\common;
class WPNovaPoshtaAutoload
{
    private static $instance = null;
    private function __construct() {
        spl_autoload_register(array($this, 'autoloadNamespace'));
    }

    public static function getInstance(){
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param $className
     */
    public function autoloadNamespace($className){
        $fileClass = WPNOVAPOSHTA_PlUGIN_DIR.'/'.str_replace("\\","/",$className).'.php';
        if (file_exists($fileClass)) {
            if (!class_exists($fileClass, FALSE)) {
                require_once $fileClass;
            }
        }
    }
}
WPNovaPoshtaAutoload::getInstance();