<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 27.01.17
 * Time: 16:25
 */

namespace includes\controllers\admin\menu;


class WPNovaPoshtaMainAdminSubMenuController extends WPNovaPoshtaBaseAdminMenuController
{

    public function action()
    {
        // TODO: Implement action() method.
        $pluginPage = add_submenu_page(
            WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN,
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
            'wp_nova_poshta_control_sub_menu',
            array(&$this, 'render'));
    }

    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello world sub menu", WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}