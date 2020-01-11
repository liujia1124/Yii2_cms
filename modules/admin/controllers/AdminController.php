<?php

namespace app\modules\admin\controllers;

use app\modules\common\controllers\SelfBaseController;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class AdminController extends SelfBaseController
{
    public static $themePath = ADMIN_PATH.'views'.DIRECTORY_SEPARATOR;
    public static $withoutLoginRoute = [
        'index' => [
            'login',
        ]
    ];

    public function init()
    {

        parent::init();
        $this->checkLogin($this->id);
        self::assign('site_name', '美图网后台');
        self::assign('view_home_assets', '/modules/admin/assets');
        static::assign('public_header', static::fetch("common/header.tpl"));
        static::assign('public_footer', static::fetch("common/footer.tpl"));

        // $footer =  static::fetch("common/header.tpl");
    }

    public function beforeAction($action)
    {

        return parent::beforeAction($action);
    }

    public  function checkLogin($action){
        if($this->id == 'login'){
            return true;
        }
        if(empty(\Yii::$app->session->get('user_info'))){
             \Yii::$app->response->redirect('/admin/login')->send();
        }


    }

}
