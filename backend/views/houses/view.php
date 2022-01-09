<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use backend\models\Houses;

/* @var $this yii\web\View */
/* @var $model backend\models\Houses */

$this->title = Houses::$modelName.'详情 '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'id', 'url' => ['index']];
$this->params['breadcrumbs'][] = Houses::$modelName.'详情';
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
            'oldid',
            'borough_name',
            'pinyin',
            'borough_names',
            'borough_alias',
            'borough_address',
            'borough_letter',
            'cityid',
            'cityname',
            'youhui_discount',
            'cityarea_id',
            'info_price',
            'start_price',
            'hight_price',
            'suggest_price',
            'price_unit',
            'borough_section',
            'borough_level',
            'borough_level_info',
            'borough_type_old',
            'borough_type',
            'borough_type2',
            'attribute',
            'borough_houses',
            'borough_typeof',
            'borough_frame',
            'borough_sale',
            'is_sell_out',
            'room_type:ntext',
            'map_lng',
            'map_lat',
            'layout_map',
            'layout_zoom',
            'borough_thumb',
            'borough_thumb_weixin',
            'sell_phone',
            'house_phone',
            'only_sell_phone',
            'sell_time_int:datetime',
            'sell_time_slot:datetime',
            'sell_time',
            'borough_completion_int',
            'is_qifang',
            'is_xianfang',
            'month_num',
            'click_num',
            'sell_num',
            'pic_num',
            'borough_developer',
            'is_checked',
            'isnew',
            'creater',
            'youhuiid',
            'house_url:url',
            'alter_ip',
            'alter_name',
            'alter_time:datetime',
            'created',
            'orderby',
            'isdel',
            'evaluate_time:datetime',
            'buygroup',
            'tg_base_num',
            'qq_service',
            'qq_group',
            'is_hot',
            'is_hot_sort',
            'is_index_area',
            'is_index_price',
            'is_index_list',
            ['attribute'=>'is_index_b_image', 'format'=>'raw', 'value'=>Yii::$app->formatter->asImage($model->is_index_b_image, ['height'=>200])],
            'is_index_b_list',
            'is_index_link',
            'is_list_search',
            'is_m_guess_like',
            'is_m_house_detail_tj',
            'is_m_hot_search',
            'created_at',
            'updated_at',
            'weixinpic',
            'videolink',
            'baidu_daohang_url:url',
            ['attribute'=>'weixin_2d_image', 'format'=>'raw', 'value'=>Yii::$app->formatter->asImage($model->weixin_2d_image, ['height'=>200])],
            'is_index_area_sort',
            'is_index_price_sort',
            'is_index_list_sort',
            ['attribute'=>'is_index_b_image_sort', 'format'=>'raw', 'value'=>Yii::$app->formatter->asImage($model->is_index_b_image_sort, ['height'=>200])],
            'is_index_b_list_sort',
            'is_index_link_sort',
            'is_list_search_sort',
            'is_m_guess_like_sort',
            'is_m_house_detail_tj_sort',
            'is_m_hot_search_sort',
            'sale_phone',
            'extra_attribute',
            'if_gb_need_idcard',
            'is_show',
            'sync_status',
            'is_vr',
        ],
    ]) ?>

    </div>
    <!-- /.box-body -->
</div>