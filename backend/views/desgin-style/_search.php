<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DesginStyleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desgin-style-search">

    <?php $form = ActiveForm::begin([
        'method' => 'get',
        'options'=>['class'=>'form-inline', 'role'=>'form'],
        'fieldConfig'=>[
            'template'=>"{label}\n{input}\n",
            'labelOptions'=>['class'=>'sr-only'],
        ],
    ]); ?>
     <?= $form->field($model, 'id', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'id']]) ?>
     <?= $form->field($model, 'name', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'风格名称']]) ?>
     <?= $form->field($model, 'status', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'0 => 启用,1=>禁用']]) ?>
     <?php // echo $form->field($model, 'created_at', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'创建时间']]) ?>
     <?php // echo $form->field($model, 'updated_at', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'更新时间']]) ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '搜索'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
