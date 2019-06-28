<?php

namespace app\modules\home\controllers;

use yii\web\Controller;

/**
 * Default controller for the `home` module
 */
class IndexController extends HomeController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index.tpl');
    }
}
