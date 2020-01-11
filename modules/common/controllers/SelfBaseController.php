<?php

namespace app\modules\common\controllers;

use yii\web\Controller;

/**
 * Default controller for the `home` module
 */
class SelfBaseController extends Controller
{
    public static $themePath = '';
    public static $smarty = null;

    public function init(){
        static::assign('view_common_assets', '/modules/common/assets');
    }
    public static function getSmarty(){

        if(empty(self::$smarty)){
            $smarty = new \Smarty();
            $smarty->left_delimiter = '<{';
            $smarty->right_delimiter = '}>';
            self::$smarty = $smarty;
        }
        return self::$smarty;
    }

    public static function assign($key, $value){
        $smarty = self::getSmarty();
        $smarty->assign($key, $value);
    }

    public static function fetch($tpl){
        $tpl = static::$themePath.$tpl;
        $smarty = self::getSmarty();
        return $smarty->fetch($tpl);
    }

    public static function display($tpl){
        $tpl = static::$themePath.$tpl;
        $smarty = self::getSmarty();
        $smarty->display($tpl);
        exit;
    }



}
