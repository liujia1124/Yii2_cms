<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class AdminController extends Controller
{
    public static $withoutLoginRoute = [
        'index' => [
            'login',
        ]
    ];

    public function beforeAction($action)
    {
        static::checkLogin($action);
        return parent::beforeAction($action);
    }

    public static function checkLogin($action){
        if(!\Yii::$app->user->isGuest){
            return true;
        }

        foreach(static::$withoutLoginRoute as $controllerId=>$actionIdArr){
            if($controllerId == $action->controller->id){
                if(in_array($action->id, $actionIdArr)){
                    return true;
                }
            }
        }

        exit('请登录');
    }
}
