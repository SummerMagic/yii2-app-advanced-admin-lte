<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\DesginStyle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box-body">
    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-sm-10\">{input}\n{hint}\n{error}</div>",
            'labelOptions' => ['class' => 'col-sm-2 control-label'],
        ],
    ]); ?>
    <div class="row">
        <?= $form->field($model, 'name', ['options' => ['class' => 'col-xs-10']])->textInput()->label('风格名称') ?>
    </div>
    <div class="row">

        <?php
        //启用状态
        $model->status = 1;
        ?>

        <?= $form->field($model, 'status')->widget(
            kartik\switchinput\SwitchInput::classname(), [
                'name' => 'set_publish',
                'pluginEvents' => [
                    'switchChange.bootstrapSwitch' => "function(e) {
                        if (e.currentTarget.checked) {
                            $(\"#publish_at-ele\").show();
                        } else {
                            $(\"#publish_at-ele\").hide();
                        }
                    }",
                ],
                'pluginOptions' => [
//                    'size'    => 'mini',
                    'onText' => '开启',
                    'offText' => '关闭',
                    'onColor' => 'success',
                    'offColor' => 'danger',
                    'inlineLabel' => true,
                    'value' => true,
                ],
            ]
        )->label('是否启用') ?>
    </div>
    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? '保存' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success pull-left' : 'btn btn-primary pull-left']) ?>
        <a data-dismiss="modal" href="javascript:history.back();" class="btn btn-default pull-right">取消</a>

    </div>
    <?php ActiveForm::end(); ?>
</div>
