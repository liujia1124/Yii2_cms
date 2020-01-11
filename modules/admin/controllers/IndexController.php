<?php

namespace app\modules\admin\controllers;

use app\modules\common\controllers\PictureHandleController;
use app\modules\common\models\PicturesModel;

/**
 * Default controller for the `admin` module
 */
class IndexController extends AdminController
{

    public function actionIndex()
    {
//        $this->redirect('admin/login');
        $list = PicturesModel::find()->where(['class_id'=>0])->limit([0,10])->asArray()->all();
        self::assign('list', $list);
        self::display('index/index.tpl');
    }

    public function actionLogin()
    {
        exit('login');
        return $this->render('index.tpl');
    }


}
