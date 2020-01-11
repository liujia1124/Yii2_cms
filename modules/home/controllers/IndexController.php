<?php

namespace app\modules\home\controllers;

use app\modules\common\controllers\PictureHandleController;
use app\modules\common\models\PicturesModel;
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

        $page = \Yii::$app->request->get('page');
        $size = 18;
        $page = empty(intval($page))?1:intval($page);
        $start = $size*($page-1)+1;
        $end = $size*$page;
        $total = PicturesModel::find()->where(['class_id' => 0])->count();
        $total_page = ceil($total/$size);
        $list = PicturesModel::find()->where(['class_id' => 0])->offset($start-1)->limit($size)->asArray()->all();
        foreach($list as $k=>$row){
             $url = $row['url'];
             $type = PictureHandleController::getFileType($url);
             $show_url = $url.'_300x240.'.$type;
             $list[$k]['show_url'] = $show_url;
        }
        self::assign('new_page', $page);
        self::assign('total_page', $total_page);
        self::assign('list', $list);
        self::display('index/index.tpl');
    }
}
