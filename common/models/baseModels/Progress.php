<?php

namespace common\models\baseModels;

use Yii;
use yii\behaviors\AttributeBehavior;
use common\components\ActiveRecord;
use common\components\behaviors\DatetimeBehavior;

/**
 * This is the model class for table "{{%decoration_progress}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $progress
 * @property integer $created_at
 * @property integer $updated_at
 */
class Progress extends \common\components\ActiveRecord
{
    public static $modelName = '装修节点';
    public $fileAttributes = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoration_progress}}';
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
            [['progress', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'id'),
            'title' => Yii::t('app', '名称'),
            'progress' => Yii::t('app', '0=>未装修,1=>装修进行中,2=>已装修,3=>随便看看'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
        ];
    }
}
