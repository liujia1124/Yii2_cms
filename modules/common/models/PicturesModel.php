<?php

namespace app\modules\common\models;
use yii\db\ActiveRecord;


class PicturesModel extends ActiveRecord
{
    public static function tableName()
    {
        return '{{pictures}}';
    }


}
