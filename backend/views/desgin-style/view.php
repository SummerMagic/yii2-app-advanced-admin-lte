<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use backend\models\DesginStyle;

/* @var $this yii\web\View */
/* @var $model backend\models\DesginStyle */

$this->title = DesginStyle::$modelName.'详情 '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'id', 'url' => ['index']];
$this->params['breadcrumbs'][] = DesginStyle::$modelName.'详情';
?>

<div class="box">
    <div class="box-header">
        <?=  Html::a('<i class="fa fa-pencil-alt"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=  Html::a('<i class="fa fa-trash-alt"></i>', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除该项目吗？',
                'method' => 'post',
            ],
        ]) ?>
        <!-- /.btn-group -->
        <div class="pull-right">
            <?=  Html::a('<i class="fa fa-reply"></i>', ['index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="20%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            'id',
            'name',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    </div>
    <!-- /.box-body -->
</div>