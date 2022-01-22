<?php

use yii\helpers\Html;
use backend\models\Progress;


/* @var $this yii\web\View */
/* @var $model backend\models\Progress */

$this->title = '新增'.Progress::$modelName;
$this->params['breadcrumbs'][] = ['label' => Progress::$modelName.'管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = '新增';
?>
<div class="box box-info">
    <div class="box-header">
        <div class="pull-right">
            <?=  Html::a('<i class="fa fa-reply"></i>', ['index'], ['class' => 'btn btn-default', 'data-dismiss'=>'modal']) ?>
        </div>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
