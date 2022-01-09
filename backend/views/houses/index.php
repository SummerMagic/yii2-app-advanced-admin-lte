<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use backend\models\Houses;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理后台';
$this->params['breadcrumbs'][] = $this->title;

$dataProvider->pagination->pageSize= Yii::$app->config->get(Yii::$app->session['config']['id'], 'backend_pagesize', 20);
?>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <!-- Check all button -->
                <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> -->
                <div class="btn-group">
                    <?= Html::a('<i class="fa fa-pencil-alt"></i>', ['create'], ['class' => 'btn btn-primary']) ?>
                </div>
                <!-- /.btn-group -->
                <a type="button" class="btn btn-default" href="javascript:window.location.reload()"><i class="fa fa-sync"></i></a>
                <div class="visible-lg-block pull-right">
                    <!-- <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div> -->
                                        <?=  $this->render('_search', [
                        'model' => $searchModel,
                    ]); ?>
                                        <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
            </div>
            <!-- /.box-header -->
            <?=  GridView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "<div class=\"box-body table-responsive\">{items}</div>\n<div class=\"box-footer clearfix\"><div class=\"row\"><div class=\"col-xs-12 col-sm-7\">{pager}</div><div class=\"col-xs-12 col-sm-5 text-right\">{summary}</div></div></div>",
                'tableOptions'=>['class'=>'table table-bordered table-hover'],
                'summary'=>'第{page}页，共{pageCount}页，当前第{begin}-{end}项，共{totalCount}项',
                'filterModel'=>null,
                'pager'=>[
                    'class'=>'backend\widgets\LinkPager',
                    'options' => [
                        'class' => 'pagination pagination-sm no-margin',
                    ],
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                  'id',
                  'oldid',
                  'borough_name',
                  'pinyin',
                  'borough_names',
                   // 'borough_alias',
                   // 'borough_address',
                   // 'borough_letter',
                   // 'cityid',
                   // 'cityname',
                   // 'youhui_discount',
                   // 'cityarea_id',
                   // 'info_price',
                   // 'start_price',
                   // 'hight_price',
                   // 'suggest_price',
                   // 'price_unit',
                   // 'borough_section',
                   // 'borough_level',
                   // 'borough_level_info',
                   // 'borough_type_old',
                   // 'borough_type',
                   // 'borough_type2',
                   // 'attribute',
                   // 'borough_houses',
                   // 'borough_typeof',
                   // 'borough_frame',
                   // 'borough_sale',
                   // 'is_sell_out',
                   // 'room_type:ntext',
                   // 'map_lng',
                   // 'map_lat',
                   // 'layout_map',
                   // 'layout_zoom',
                   // 'borough_thumb',
                   // 'borough_thumb_weixin',
                   // 'sell_phone',
                   // 'house_phone',
                   // 'only_sell_phone',
                   // 'sell_time_int:datetime',
                   // 'sell_time_slot:datetime',
                   // 'sell_time',
                   // 'borough_completion_int',
                   // 'is_qifang',
                   // 'is_xianfang',
                   // 'month_num',
                   // 'click_num',
                   // 'sell_num',
                   // 'pic_num',
                   // 'borough_developer',
                   // 'is_checked',
                   // 'isnew',
                   // 'creater',
                   // 'youhuiid',
                   // 'house_url:url',
                   // 'alter_ip',
                   // 'alter_name',
                   // 'alter_time:datetime',
                   // 'created',
                   // 'orderby',
                   // 'isdel',
                   // 'evaluate_time:datetime',
                   // 'buygroup',
                   // 'tg_base_num',
                   // 'qq_service',
                   // 'qq_group',
                   // 'is_hot',
                   // 'is_hot_sort',
                   // 'is_index_area',
                   // 'is_index_price',
                   // 'is_index_list',
                   // 'is_index_b_image',
                   // 'is_index_b_list',
                   // 'is_index_link',
                   // 'is_list_search',
                   // 'is_m_guess_like',
                   // 'is_m_house_detail_tj',
                   // 'is_m_hot_search',
                   // 'created_at',
                   // 'updated_at',
                   // 'weixinpic',
                   // 'videolink',
                   // 'baidu_daohang_url:url',
                   // 'weixin_2d_image',
                   // 'is_index_area_sort',
                   // 'is_index_price_sort',
                   // 'is_index_list_sort',
                   // 'is_index_b_image_sort',
                   // 'is_index_b_list_sort',
                   // 'is_index_link_sort',
                   // 'is_list_search_sort',
                   // 'is_m_guess_like_sort',
                   // 'is_m_house_detail_tj_sort',
                   // 'is_m_hot_search_sort',
                   // 'sale_phone',
                   // 'extra_attribute',
                   // 'if_gb_need_idcard',
                   // 'is_show',
                   // 'sync_status',
                   // 'is_vr',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'操作',
                    'headerOptions'=>['style'=>'width:150px'],
                    'buttonOptions'=>['class'=>'btn btn-default btn-sm'],
                ],
            ],
        ]); ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
