<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\HouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'oldid') ?>

    <?= $form->field($model, 'borough_name') ?>

    <?= $form->field($model, 'pinyin') ?>

    <?= $form->field($model, 'borough_names') ?>

    <?php // echo $form->field($model, 'borough_alias') ?>

    <?php // echo $form->field($model, 'borough_address') ?>

    <?php // echo $form->field($model, 'borough_letter') ?>

    <?php // echo $form->field($model, 'cityid') ?>

    <?php // echo $form->field($model, 'cityname') ?>

    <?php // echo $form->field($model, 'youhui_discount') ?>

    <?php // echo $form->field($model, 'cityarea_id') ?>

    <?php // echo $form->field($model, 'info_price') ?>

    <?php // echo $form->field($model, 'start_price') ?>

    <?php // echo $form->field($model, 'hight_price') ?>

    <?php // echo $form->field($model, 'suggest_price') ?>

    <?php // echo $form->field($model, 'price_unit') ?>

    <?php // echo $form->field($model, 'borough_section') ?>

    <?php // echo $form->field($model, 'borough_level') ?>

    <?php // echo $form->field($model, 'borough_level_info') ?>

    <?php // echo $form->field($model, 'borough_type_old') ?>

    <?php // echo $form->field($model, 'borough_type') ?>

    <?php // echo $form->field($model, 'borough_type2') ?>

    <?php // echo $form->field($model, 'attribute') ?>

    <?php // echo $form->field($model, 'borough_houses') ?>

    <?php // echo $form->field($model, 'borough_typeof') ?>

    <?php // echo $form->field($model, 'borough_frame') ?>

    <?php // echo $form->field($model, 'borough_sale') ?>

    <?php // echo $form->field($model, 'is_sell_out') ?>

    <?php // echo $form->field($model, 'room_type') ?>

    <?php // echo $form->field($model, 'map_lng') ?>

    <?php // echo $form->field($model, 'map_lat') ?>

    <?php // echo $form->field($model, 'layout_map') ?>

    <?php // echo $form->field($model, 'layout_zoom') ?>

    <?php // echo $form->field($model, 'borough_thumb') ?>

    <?php // echo $form->field($model, 'borough_thumb_weixin') ?>

    <?php // echo $form->field($model, 'sell_phone') ?>

    <?php // echo $form->field($model, 'house_phone') ?>

    <?php // echo $form->field($model, 'only_sell_phone') ?>

    <?php // echo $form->field($model, 'sell_time_int') ?>

    <?php // echo $form->field($model, 'sell_time_slot') ?>

    <?php // echo $form->field($model, 'sell_time') ?>

    <?php // echo $form->field($model, 'borough_completion_int') ?>

    <?php // echo $form->field($model, 'is_qifang') ?>

    <?php // echo $form->field($model, 'is_xianfang') ?>

    <?php // echo $form->field($model, 'month_num') ?>

    <?php // echo $form->field($model, 'click_num') ?>

    <?php // echo $form->field($model, 'sell_num') ?>

    <?php // echo $form->field($model, 'pic_num') ?>

    <?php // echo $form->field($model, 'borough_developer') ?>

    <?php // echo $form->field($model, 'is_checked') ?>

    <?php // echo $form->field($model, 'isnew') ?>

    <?php // echo $form->field($model, 'creater') ?>

    <?php // echo $form->field($model, 'youhuiid') ?>

    <?php // echo $form->field($model, 'house_url') ?>

    <?php // echo $form->field($model, 'alter_ip') ?>

    <?php // echo $form->field($model, 'alter_name') ?>

    <?php // echo $form->field($model, 'alter_time') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'orderby') ?>

    <?php // echo $form->field($model, 'isdel') ?>

    <?php // echo $form->field($model, 'evaluate_time') ?>

    <?php // echo $form->field($model, 'buygroup') ?>

    <?php // echo $form->field($model, 'tg_base_num') ?>

    <?php // echo $form->field($model, 'qq_service') ?>

    <?php // echo $form->field($model, 'qq_group') ?>

    <?php // echo $form->field($model, 'is_hot') ?>

    <?php // echo $form->field($model, 'is_hot_sort') ?>

    <?php // echo $form->field($model, 'is_index_area') ?>

    <?php // echo $form->field($model, 'is_index_price') ?>

    <?php // echo $form->field($model, 'is_index_list') ?>

    <?php // echo $form->field($model, 'is_index_b_image') ?>

    <?php // echo $form->field($model, 'is_index_b_list') ?>

    <?php // echo $form->field($model, 'is_index_link') ?>

    <?php // echo $form->field($model, 'is_list_search') ?>

    <?php // echo $form->field($model, 'is_m_guess_like') ?>

    <?php // echo $form->field($model, 'is_m_house_detail_tj') ?>

    <?php // echo $form->field($model, 'is_m_hot_search') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'weixinpic') ?>

    <?php // echo $form->field($model, 'videolink') ?>

    <?php // echo $form->field($model, 'baidu_daohang_url') ?>

    <?php // echo $form->field($model, 'weixin_2d_image') ?>

    <?php // echo $form->field($model, 'is_index_area_sort') ?>

    <?php // echo $form->field($model, 'is_index_price_sort') ?>

    <?php // echo $form->field($model, 'is_index_list_sort') ?>

    <?php // echo $form->field($model, 'is_index_b_image_sort') ?>

    <?php // echo $form->field($model, 'is_index_b_list_sort') ?>

    <?php // echo $form->field($model, 'is_index_link_sort') ?>

    <?php // echo $form->field($model, 'is_list_search_sort') ?>

    <?php // echo $form->field($model, 'is_m_guess_like_sort') ?>

    <?php // echo $form->field($model, 'is_m_house_detail_tj_sort') ?>

    <?php // echo $form->field($model, 'is_m_hot_search_sort') ?>

    <?php // echo $form->field($model, 'sale_phone') ?>

    <?php // echo $form->field($model, 'extra_attribute') ?>

    <?php // echo $form->field($model, 'if_gb_need_idcard') ?>

    <?php // echo $form->field($model, 'is_show') ?>

    <?php // echo $form->field($model, 'sync_status') ?>

    <?php // echo $form->field($model, 'is_vr') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
