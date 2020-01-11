<?php

namespace app\modules\admin\controllers;


class LoginController extends AdminController
{

    public function actionIndex()
    {
       static::display('login/login.tpl');
    }

    public function actionDo_login()
    {
        $username = \Yii::$app->request->post('user_name');
        $password = \Yii::$app->request->post('password');

        if($username == 'Moon' && $password == '123123'){
            \Yii::$app->session['user_info'] = 'Moon';
            echo  json_encode(['status'=>200, 'data'=>['url' => 'index'] ]);
            exit;
        }

        echo  json_encode(['status'=>400, ]);
        exit;
    }


}
