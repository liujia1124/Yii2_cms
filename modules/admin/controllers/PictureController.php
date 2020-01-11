<?php

namespace app\modules\admin\controllers;

use app\modules\common\controllers\PictureHandleController;
use app\modules\common\models\PicturesModel;

/**
 * Default controller for the `admin` module
 */
class PictureController extends AdminController
{

    public function actionIndex()
    {
        $list = PicturesModel::find()->where(['class_id' => 0])->limit([0, 10])->asArray()->all();   //print_r($list);exit;
        self::display('index/index.tpl');
    }

    public function actionAdd_picture()
    {

        if (
            (
                $_FILES["picture_source"]["type"] == "image/gif"
                || $_FILES["picture_source"]["type"] == "image/jpeg"
                || $_FILES["picture_source"]["type"] == "image/jpg"
                || $_FILES["picture_source"]["type"] == "image/pjpeg"
                || $_FILES["picture_source"]["type"] == "image/x-png"
                || $_FILES["picture_source"]["type"] == "image/png"
            )
            &&
            (
                $_FILES["file"]["size"] < 10 * 1024 * 1024
            )
        ) {
            $file_type = explode('/', $_FILES["picture_source"]["type"])[1];
            $file_name = time().rand(100000,900000).'.'.$file_type;
            $file_path = ROOT_PATH . DIRECTORY_SEPARATOR . "upload/" .$file_name;
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["picture_source"]["tmp_name"], $file_path);
            PictureHandleController::CreateMoreSizePicture($file_path);
            \Yii::$app->db->createCommand()->insert('pictures', [
                'name' => $_POST['picture_name'],
                'url' => $file_name,
                'add_time' => time()
            ])->execute();
            echo json_encode(['status'=>200, 'msg'=>'操作成功']);
            exit();
        } else {
            echo json_encode(['status'=>400, 'msg'=>'非法的文件格式']);
            exit();
        }

        echo json_encode(['status'=>400, 'msg'=>'操作失败']);
        exit();
    }


}
