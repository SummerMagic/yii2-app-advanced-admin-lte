<?php

namespace common\models\baseModels;

use Yii;
use yii\behaviors\AttributeBehavior;
use common\components\ActiveRecord;
use common\components\behaviors\DatetimeBehavior;

/**
 * This is the model class for table "{{%user_designer}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $avatar
 * @property string $introduction
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Designer extends \common\components\ActiveRecord
{
    public static $modelName = '设计师';
    public $fileAttributes = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_designer}}';
    }
    public function behaviors()
    {
        return [
            DatetimeBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'avatar', 'introduction', 'email'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '自增id'),
            'name' => Yii::t('app', '设计师名称'),
            'avatar' => Yii::t('app', '头像'),
            'introduction' => Yii::t('app', '个人介绍'),
            'email' => Yii::t('app', '电子邮件'),
            'status' => Yii::t('app', '状态'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
        ];
    }
}
