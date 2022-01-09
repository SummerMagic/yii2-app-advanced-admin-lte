<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '优佳新房');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="houses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'oldid',
            'borough_name',
            'pinyin',
            'borough_names',
            //'borough_alias',
            //'borough_address',
            //'borough_letter',
            //'cityid',
            //'cityname',
            //'youhui_discount',
            //'cityarea_id',
            //'info_price',
            //'start_price',
            //'hight_price',
            //'suggest_price',
            //'price_unit',
            //'borough_section',
            //'borough_level',
            //'borough_level_info',
            //'borough_type_old',
            //'borough_type',
            //'borough_type2',
            //'attribute',
            //'borough_houses',
            //'borough_typeof',
            //'borough_frame',
            //'borough_sale',
            //'is_sell_out',
            //'room_type:ntext',
            //'map_lng',
            //'map_lat',
            //'layout_map',
            //'layout_zoom',
            //'borough_thumb',
            //'borough_thumb_weixin',
            //'sell_phone',
            //'house_phone',
            //'only_sell_phone',
            //'sell_time_int:datetime',
            //'sell_time_slot:datetime',
            //'sell_time',
            //'borough_completion_int',
            //'is_qifang',
            //'is_xianfang',
            //'month_num',
            //'click_num',
            //'sell_num',
            //'pic_num',
            //'borough_developer',
            //'is_checked',
            //'isnew',
            //'creater',
            //'youhuiid',
            //'house_url:url',
            //'alter_ip',
            //'alter_name',
            //'alter_time:datetime',
            //'created',
            //'orderby',
            //'isdel',
            //'evaluate_time:datetime',
            //'buygroup',
            //'tg_base_num',
            //'qq_service',
            //'qq_group',
            //'is_hot',
            //'is_hot_sort',
            //'is_index_area',
            //'is_index_price',
            //'is_index_list',
            //'is_index_b_image',
            //'is_index_b_list',
            //'is_index_link',
            //'is_list_search',
            //'is_m_guess_like',
            //'is_m_house_detail_tj',
            //'is_m_hot_search',
            //'created_at',
            //'updated_at',
            //'weixinpic',
            //'videolink',
            //'baidu_daohang_url:url',
            //'weixin_2d_image',
            //'is_index_area_sort',
            //'is_index_price_sort',
            //'is_index_list_sort',
            //'is_index_b_image_sort',
            //'is_index_b_list_sort',
            //'is_index_link_sort',
            //'is_list_search_sort',
            //'is_m_guess_like_sort',
            //'is_m_house_detail_tj_sort',
            //'is_m_hot_search_sort',
            //'sale_phone',
            //'extra_attribute',
            //'if_gb_need_idcard',
            //'is_show',
            //'sync_status',
            //'is_vr',
//            [
//                'class' => ActionColumn::className(),
//                'urlCreator' => function ($action, Houses $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'id' => $model->id]);
//                 }
//            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
