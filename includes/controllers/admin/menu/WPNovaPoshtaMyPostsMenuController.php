<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 29.01.17
 * Time: 19:01
 */

namespace includes\controllers\admin\menu;


class WPNovaPoshtaMyPostsMenuController extends WPNovaPoshtaBaseAdminMenuController
{
    public function action()
    {
        // TODO: Implement action() method.

        $pluginPage = add_posts_page(
            __('Sub posts WP Nova Poshta', WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN),
            __('Sub posts WP Nova Poshta', WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN),
            'read',
            'wp_nova_poshta_control_sub_posts_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello this page posts", WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}