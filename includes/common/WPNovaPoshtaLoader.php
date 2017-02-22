<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 25.01.17
 * Time: 8:39 PM
 */

namespace includes\common;

use includes\controllers\admin\menu\WPNovaPoshtaGuestBookSubMenuController;
use includes\controllers\admin\menu\WPNovaPoshtaMainAdminMenuController;
use includes\controllers\admin\menu\WPNovaPoshtaMainAdminSubMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyCommentsMenuController;
use includes\controllers\admin\menu\WPNovaPoshtaMyDashboardMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyMediaMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyOptionsMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyPagesMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyPluginsMenuController;
use includes\controllers\admin\menu\WPNovaPoshtaMyPostsMenuController;
use includes\controllers\site\shortcodes\WPNovaPoshtaCalendarPricesMonthShortcodeController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyThemeMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyToolsMenuController;
//use includes\controllers\admin\menu\WPNovaPoshtaMyUsersMenuController;
//use includes\example\WPNovaPoshtaExampleAction;
//use includes\example\WPNovaPoshtaExampleFilter;

class WPNovaPoshtaLoader
{
    private static $instance = null;

    private function __construct(){
        // is_admin() Условный тег. Срабатывает когда показывается админ панель сайта (консоль или любая
        // другая страница админки).
        // Проверяем в админке мы или нет
        if ( is_admin() ) {
            // Когда в админке вызываем метод admin()
            $this->admin();
        } else {
            // Когда на сайте вызываем метод site()
            $this->site();
        }
        $this->all();


    }

    public static function getInstance(){
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Метод будет срабатывать когда вы находитесь в Админ панеле. Загрузка классов для Админ панели
     */
    public function admin(){
        WPNovaPoshtaMainAdminMenuController::newInstance();
        WPNovaPoshtaMainAdminSubMenuController::newInstance();
        WPNovaPoshtaMyDashboardMenuController::newInstance();
        WPNovaPoshtaMyPostsMenuController::newInstance();
        WPNovaPoshtaGuestBookSubMenuController::newInstance();
//        WPNovaPoshtaMyMediaMenuController::newInstance();
//        WPNovaPoshtaMyPagesMenuController::newInstance();
//        WPNovaPoshtaMyCommentsMenuController::newInstance();
//        WPNovaPoshtaMyThemeMenuController::newInstance();
//        WPNovaPoshtaMyPluginsMenuController::newInstance();
//        WPNovaPoshtaMyUsersMenuController::newInstance();
//        WPNovaPoshtaMyToolsMenuController::newInstance();
//        WPNovaPoshtaMyOptionsMenuController::newInstance();

    }

    /**
     * Метод будет срабатывать когда вы находитесь на Сайте. Загрузка классов для Сайта
     */
    public function site(){
        WPNovaPoshtaCalendarPricesMonthShortcodeController::newInstance();
    }

    /**
     * Метод будет срабатывать везде. Загрузка классов для Админ панеле и Сайта
     */
    public function all(){
        WPNovaPoshtaLocalization::getInstance();
        WPNovaPoshtaLoaderScript::getInstance();
                //$stepByStepExampleAction = StepByStepExampleAction::newInstance();
        /*$stepByStepExampleFilter = StepByStepExampleFilter::newInstance();
       $stepByStepExampleFilter->callMyFilter("Roman");
       $stepByStepExampleFilter->callMyFilterAdditionalParameter("Roman", "Softgroup", "Poltava");
       $stepByStepExampleAction = StepByStepExampleAction::newInstance();
       $stepByStepExampleAction->callMyAction();
       $stepByStepExampleAction->callMyActionAdditionalParameter( 'test1', 'test2', 'test3' );*/
    }
}