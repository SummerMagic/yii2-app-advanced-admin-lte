<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Progress */
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
        <?= $form->field($model, 'title', ['options' => ['class' => 'col-xs-6']])->textarea(['rows' => 2])->label('节点名称') ?>
    </div>

    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? '保存' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success pull-left' : 'btn btn-primary pull-left']) ?>
        <a data-dismiss="modal" href="javascript:history.back();" class="btn btn-default pull-right">取消</a>
    </div>
    <?php ActiveForm::end(); ?>
</div>
