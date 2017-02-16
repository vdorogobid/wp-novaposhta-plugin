<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 27.01.17
 * Time: 15:26
 */

namespace includes\controllers\admin\menu;

use includes\common\WPNovaPoshtaRequestApi;

class WPNovaPoshtaMainAdminMenuController extends WPNovaPoshtaBaseAdminMenuController
{

    public function action()
    {
        // TODO: Implement action() method.
        /**
         * add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
         *
         */
        $pluginPage = add_menu_page(
            _x(
                'WP Nova Poshta',
                'admin menu page' ,
                WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN
            ),
            _x(
                'WP Nova Poshta',
                'admin menu page' ,
                WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN
            ),
            'manage_options',
            WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN,
            array(&$this,'render'),
            WPNOVAPOSHTA_PlUGIN_URL .'assets/images/main-menu.png'
        );
    }

    /**
     * Метод отвечающий за контент страницы
     */
    public function render()
    {
        // TODO: Implement render() method.
//        _e("Hello world wpnovaposhta", WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN);
//        $reuestAPI = WPNovaPoshtaRequestApi::getInstance();
//        var_dump($reuestAPI->getCalendarPricesMonth('RUB', 'MOW', 'LED'));
    $pathView = WPNOVAPOSHTA_PlUGIN_DIR."/includes/views/admin/menu/WPNovaPoshtaMainAdminMenu.view.php";
        $this->loadView($pathView);
    }
  
    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}