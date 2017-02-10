<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 29.01.17
 * Time: 18:34
 */

namespace includes\controllers\admin\menu;


class WPNovaPoshtaMyDashboardMenuController extends WPNovaPoshtaBaseAdminMenuController
{
    public function action()
    {
        // TODO: Implement action() method.

        $pluginPage = add_dashboard_page(
            __('Sub dashboard WP Nova Poshta', WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN),
            __('Sub dashboard WP Nova Poshta', WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN),
            'read',
            'wp_nova_poshta_control_sub_dashboard_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello this page dashboards", WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}