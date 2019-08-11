<?php


namespace app\models;

use yii\db\ActiveRecord;

class Good extends ActiveRecord
{
    public $name;

    public static function tableName()
    {
        return 'goods';
    }

    public function getAllGoods() {
        $goods = Good::find()->asArray()->all();
        return $goods;
    }
}