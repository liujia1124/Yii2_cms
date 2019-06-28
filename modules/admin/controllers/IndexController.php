<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class IndexController extends AdminController
{

    public function actionIndex()
    {
        return $this->renderPartial('index.tpl');
    }

    public function actionLogin()
    {
        return $this->render('index.tpl');
    }


}
