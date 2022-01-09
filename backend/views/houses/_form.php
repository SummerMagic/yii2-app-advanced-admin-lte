<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Houses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box-body">
    <?php  $form = ActiveForm::begin([
        'options'=>['class'=>'form-horizontal', 'enctype'=>'multipart/form-data'],
        'fieldConfig'=>[
            'template'=>"{label}\n<div class=\"col-sm-10\">{input}\n{hint}\n{error}</div>",
            'labelOptions'=>['class'=>'col-sm-2 control-label'],
        ],
    ]); ?>
    <?= $form->field($model, 'oldid')->textInput() ?>
    <?= $form->field($model, 'borough_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pinyin')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_names')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'borough_alias')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_address')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'borough_letter')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cityid')->textInput() ?>
    <?= $form->field($model, 'cityname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'youhui_discount')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'cityarea_id')->textInput() ?>
    <?= $form->field($model, 'info_price')->textInput() ?>
    <?= $form->field($model, 'start_price')->textInput() ?>
    <?= $form->field($model, 'hight_price')->textInput() ?>
    <?= $form->field($model, 'suggest_price')->textInput() ?>
    <?= $form->field($model, 'price_unit')->textInput() ?>
    <?= $form->field($model, 'borough_section')->textInput() ?>
    <?= $form->field($model, 'borough_level')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'borough_level_info')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_type_old')->textInput() ?>
    <?= $form->field($model, 'borough_type')->textInput() ?>
    <?= $form->field($model, 'borough_type2')->textInput() ?>
    <?= $form->field($model, 'attribute')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'borough_houses')->textInput() ?>
    <?= $form->field($model, 'borough_typeof')->textInput() ?>
    <?= $form->field($model, 'borough_frame')->textInput() ?>
    <?= $form->field($model, 'borough_sale')->textInput() ?>
    <?= $form->field($model, 'is_sell_out')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'room_type')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'map_lng')->textInput() ?>
    <?= $form->field($model, 'map_lat')->textInput() ?>
    <?= $form->field($model, 'layout_map')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'layout_zoom')->textInput() ?>
    <?= $form->field($model, 'borough_thumb')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_thumb_weixin')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'sell_phone')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'house_phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'only_sell_phone')->textInput() ?>
    <?= $form->field($model, 'sell_time_int')->textInput() ?>
    <?= $form->field($model, 'sell_time_slot')->textInput() ?>
    <?= $form->field($model, 'sell_time')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_completion_int')->textInput() ?>
    <?= $form->field($model, 'is_qifang')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_xianfang')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'month_num')->textInput() ?>
    <?= $form->field($model, 'click_num')->textInput() ?>
    <?= $form->field($model, 'sell_num')->textInput() ?>
    <?= $form->field($model, 'pic_num')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'borough_developer')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'is_checked')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
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
    <?= $form->field($model, 'is_hot')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_hot_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_area')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_price')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_list')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_b_image')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_b_list')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_link')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_list_search')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_guess_like')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_house_detail_tj')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_hot_search')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'weixinpic')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'videolink')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'baidu_daohang_url')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'weixin_2d_image')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'is_index_area_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_price_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_list_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_b_image_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_b_list_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_index_link_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_list_search_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_guess_like_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_house_detail_tj_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'is_m_hot_search_sort')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'sale_phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'extra_attribute')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'if_gb_need_idcard')->textInput() ?>
    <?= $form->field($model, 'is_show')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <?= $form->field($model, 'sync_status')->textInput() ?>
    <?= $form->field($model, 'is_vr')->radiolist(['1'=>'是', '0'=>'否'], ['itemOptions'=>['class'=>'minimal']]) ?>
    <div class="box-footer">
        <a data-dismiss="modal" href="javascript:history.back();" class="btn btn-default">取消</a>
        <?=  Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
    </div>
    <?php  ActiveForm::end(); ?>
</div>