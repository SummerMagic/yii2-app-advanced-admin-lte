<?php

namespace frontend\models;

use common\baseModels\Houses as baseHouses;
use Yii;

/**
 * @desc 楼盘列表模型
 */
class Houses extends baseHouses
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    parent::EVENT_BEFORE_INSERT => 'created_at',
                ],
            ],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }

    public function beforeSave($insert)
    {
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }
}
