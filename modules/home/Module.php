<?php

namespace app\modules\home;

/**
 * home module definition class
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\home\controllers';

    public $defaultRoute = 'index';


    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
