<?php

namespace app\modules\common\controllers;


class PictureHandleController
{
    public static $type = [
        'png',
        'jpg',
        'gif',
        'jpeg'
        ];

    public static function CreateMoreSizePictures($source_picture ,array $sizeArr)
    {
       if(!is_array($sizeArr)){
            exit('err');
       }
       foreach($sizeArr as $arr){
           if(!is_array($arr)){
               exit('err');
           }
           static::CreateMoreSizePicture($source_picture, $arr);
       }
    }

    public static function CreateMoreSizePicture($source_picture ,array $sizeArr =[300, 240])
    {
        $new_x = $sizeArr[0];
        $new_y = $sizeArr[1];
        if( empty( intval($new_x)) || empty( intval($new_y)) ){
            return false;
        }

        $old_name = basename($source_picture);
        $picture_type = explode('.', $old_name);
        if(count($picture_type) != 2){
            exit('图片非法');
        }
        $picture_type = $picture_type[1];
        if(!in_array($picture_type, static::$type)){
            exit($picture_type);
        }
        if($picture_type == 'png'){
            $image_src = imagecreatefrompng($source_picture);
        }
        if($picture_type == 'jpg' || $picture_type == 'jpeg' ){
            $image_src = imagecreatefromjpeg($source_picture);
        }
        if($picture_type == 'gif'){
            $image_src = imagecreatefromgif($source_picture);
        }

        $new_name = str_replace($old_name, $old_name."_{$new_x}x{$new_y}".'.'.$picture_type, $source_picture);

        $src_w = imagesx($image_src);
        $src_h = imagesy($image_src);
        $img_new = imagecreatetruecolor($new_x, $new_y);
        imagecopyresized($img_new, $image_src, 0, 0, 0, 0, $new_x, $new_y, $src_w, $src_h);


        if($picture_type == 'gif'){
            imagegif($img_new, $new_name);
        }
        if($picture_type == 'png'){
            imagegif($img_new, $new_name);
        }
        if($picture_type == 'jpg' || $picture_type == 'jpeg' ){
            imagegif($img_new, $new_name);
        }
        imagedestroy($img_new);
        imagedestroy($image_src);

        return true;
    }

    public static function getFileType($path){
        $old_name = basename($path);
        $picture_type = explode('.', $old_name);
        if(count($picture_type) != 2){
            exit('非法文件');
        }

        return $picture_type[1];
    }


}
