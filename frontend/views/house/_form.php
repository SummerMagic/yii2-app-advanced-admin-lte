<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Houses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oldid')->textInput() ?>

    <?= $form->field($model, 'borough_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pinyin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityid')->textInput() ?>

    <?= $form->field($model, 'cityname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youhui_discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityarea_id')->textInput() ?>

    <?= $form->field($model, 'info_price')->textInput() ?>

    <?= $form->field($model, 'start_price')->textInput() ?>

    <?= $form->field($model, 'hight_price')->textInput() ?>

    <?= $form->field($model, 'suggest_price')->textInput() ?>

    <?= $form->field($model, 'price_unit')->textInput() ?>

    <?= $form->field($model, 'borough_section')->textInput() ?>

    <?= $form->field($model, 'borough_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_level_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_type_old')->textInput() ?>

    <?= $form->field($model, 'borough_type')->textInput() ?>

    <?= $form->field($model, 'borough_type2')->textInput() ?>

    <?= $form->field($model, 'attribute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_houses')->textInput() ?>

    <?= $form->field($model, 'borough_typeof')->textInput() ?>

    <?= $form->field($model, 'borough_frame')->textInput() ?>

    <?= $form->field($model, 'borough_sale')->textInput() ?>

    <?= $form->field($model, 'is_sell_out')->textInput() ?>

    <?= $form->field($model, 'room_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'map_lng')->textInput() ?>

    <?= $form->field($model, 'map_lat')->textInput() ?>

    <?= $form->field($model, 'layout_map')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'layout_zoom')->textInput() ?>

    <?= $form->field($model, 'borough_thumb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_thumb_weixin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sell_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'only_sell_phone')->textInput() ?>

    <?= $form->field($model, 'sell_time_int')->textInput() ?>

    <?= $form->field($model, 'sell_time_slot')->textInput() ?>

    <?= $form->field($model, 'sell_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_completion_int')->textInput() ?>

    <?= $form->field($model, 'is_qifang')->textInput() ?>

    <?= $form->field($model, 'is_xianfang')->textInput() ?>

    <?= $form->field($model, 'month_num')->textInput() ?>

    <?= $form->field($model, 'click_num')->textInput() ?>

    <?= $form->field($model, 'sell_num')->textInput() ?>

    <?= $form->field($model, 'pic_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borough_developer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_checked')->textInput() ?>

    <?= $form->field($model, 'isnew')->textInput() ?>

    <?= $form->field($model, 'creater')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youhuiid')->textInput() ?>

    <?= $form->field($model, 'house_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alter_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alter_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alter_time')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'orderby')->textInput() ?>

    <?= $form->field($model, 'isdel')->textInput() ?>

    <?= $form->field($model, 'evaluate_time')->textInput() ?>

    <?= $form->field($model, 'buygroup')->textInput() ?>

    <?= $form->field($model, 'tg_base_num')->textInput() ?>

    <?= $form->field($model, 'qq_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_hot')->textInput() ?>

    <?= $form->field($model, 'is_hot_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_area')->textInput() ?>

    <?= $form->field($model, 'is_index_price')->textInput() ?>

    <?= $form->field($model, 'is_index_list')->textInput() ?>

    <?= $form->field($model, 'is_index_b_image')->textInput() ?>

    <?= $form->field($model, 'is_index_b_list')->textInput() ?>

    <?= $form->field($model, 'is_index_link')->textInput() ?>

    <?= $form->field($model, 'is_list_search')->textInput() ?>

    <?= $form->field($model, 'is_m_guess_like')->textInput() ?>

    <?= $form->field($model, 'is_m_house_detail_tj')->textInput() ?>

    <?= $form->field($model, 'is_m_hot_search')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'weixinpic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'videolink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baidu_daohang_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weixin_2d_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_index_area_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_price_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_list_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_b_image_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_b_list_sort')->textInput() ?>

    <?= $form->field($model, 'is_index_link_sort')->textInput() ?>

    <?= $form->field($model, 'is_list_search_sort')->textInput() ?>

    <?= $form->field($model, 'is_m_guess_like_sort')->textInput() ?>

    <?= $form->field($model, 'is_m_house_detail_tj_sort')->textInput() ?>

    <?= $form->field($model, 'is_m_hot_search_sort')->textInput() ?>

    <?= $form->field($model, 'sale_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extra_attribute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_gb_need_idcard')->textInput() ?>

    <?= $form->field($model, 'is_show')->textInput() ?>

    <?= $form->field($model, 'sync_status')->textInput() ?>

    <?= $form->field($model, 'is_vr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
