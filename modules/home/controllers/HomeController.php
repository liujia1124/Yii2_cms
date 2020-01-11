<?php

namespace app\modules\home\controllers;

use app\modules\common\controllers\SelfBaseController;
use yii\web\Controller;

/**
 * Default controller for the `home` module
 */
class HomeController extends SelfBaseController
{
    public static $themePath = HOME_PATH.'views'.DIRECTORY_SEPARATOR;
    public function init()
    {
        parent::init();
        self::assign('site_name', '美图网');
        self::assign('view_home_assets', '/modules/home/assets');
        static::assign('public_header', static::fetch("common/header.tpl"));
        static::assign('public_footer', static::fetch("common/footer.tpl"));

       // $footer =  static::fetch("common/header.tpl");
    }


}
