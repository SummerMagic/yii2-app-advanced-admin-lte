<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\HouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-search">

    <?php $form = ActiveForm::begin([
        'method' => 'get',
        'options'=>['class'=>'form-inline', 'role'=>'form'],
        'fieldConfig'=>[
            'template'=>"{label}\n{input}\n",
            'labelOptions'=>['class'=>'sr-only'],
        ],
    ]); ?>
     <?= $form->field($model, 'id', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'ID']]) ?>
     <?= $form->field($model, 'oldid', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'旧id']]) ?>
     <?= $form->field($model, 'borough_name', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘名称']]) ?>
     <?php // echo $form->field($model, 'pinyin', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘名称全拼']]) ?>
     <?php // echo $form->field($model, 'borough_names', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'相似名称']]) ?>
     <?php // echo $form->field($model, 'borough_alias', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'项目期数']]) ?>
     <?php // echo $form->field($model, 'borough_address', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'项目位置']]) ?>
     <?php // echo $form->field($model, 'borough_letter', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘字母表示']]) ?>
     <?php // echo $form->field($model, 'cityid', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'站点城市ID']]) ?>
     <?php // echo $form->field($model, 'cityname', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'城市名称']]) ?>
     <?php // echo $form->field($model, 'youhui_discount', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'优惠']]) ?>
     <?php // echo $form->field($model, 'cityarea_id', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'区域id']]) ?>
     <?php // echo $form->field($model, 'info_price', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘价格']]) ?>
     <?php // echo $form->field($model, 'start_price', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'最低价']]) ?>
     <?php // echo $form->field($model, 'hight_price', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'最高价']]) ?>
     <?php // echo $form->field($model, 'suggest_price', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'参考价格']]) ?>
     <?php // echo $form->field($model, 'price_unit', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'价格单位，1是元/㎡,2是万元/套']]) ?>
     <?php // echo $form->field($model, 'borough_section', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘版块']]) ?>
     <?php // echo $form->field($model, 'borough_level', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'装修状态']]) ?>
     <?php // echo $form->field($model, 'borough_level_info', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'装修描述']]) ?>
     <?php // echo $form->field($model, 'borough_type_old', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'物业类型旧']]) ?>
     <?php // echo $form->field($model, 'borough_type', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'物业类型']]) ?>
     <?php // echo $form->field($model, 'borough_type2', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'物业类型分类']]) ?>
     <?php // echo $form->field($model, 'attribute', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'特色属性']]) ?>
     <?php // echo $form->field($model, 'borough_houses', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'房屋属性']]) ?>
     <?php // echo $form->field($model, 'borough_typeof', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'建筑类型']]) ?>
     <?php // echo $form->field($model, 'borough_frame', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'建筑结构']]) ?>
     <?php // echo $form->field($model, 'borough_sale', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'销售状态']]) ?>
     <?php // echo $form->field($model, 'is_sell_out', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否售完，1为售完，排序专用']]) ?>
     <?php // echo $form->field($model, 'room_type', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'户型描述']]) ?>
     <?php // echo $form->field($model, 'map_lng', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘经度']]) ?>
     <?php // echo $form->field($model, 'map_lat', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘纬度']]) ?>
     <?php // echo $form->field($model, 'layout_map', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'地图层']]) ?>
     <?php // echo $form->field($model, 'layout_zoom', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'地图层大小']]) ?>
     <?php // echo $form->field($model, 'borough_thumb', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘缩略图']]) ?>
     <?php // echo $form->field($model, 'borough_thumb_weixin', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'微信缩略图']]) ?>
     <?php // echo $form->field($model, 'sell_phone', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'售楼电话']]) ?>
     <?php // echo $form->field($model, 'house_phone', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'售楼电话,如果设置“只显示该电话”,前端则显示此售楼电话']]) ?>
     <?php // echo $form->field($model, 'only_sell_phone', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否只显示销售电话1=是 0=否']]) ?>
     <?php // echo $form->field($model, 'sell_time_int', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'开盘时间整形']]) ?>
     <?php // echo $form->field($model, 'sell_time_slot', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'开盘时间段']]) ?>
     <?php // echo $form->field($model, 'sell_time', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'开盘时间描述']]) ?>
     <?php // echo $form->field($model, 'borough_completion_int', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'入住时间']]) ?>
     <?php // echo $form->field($model, 'is_qifang', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否期房']]) ?>
     <?php // echo $form->field($model, 'is_xianfang', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否现房']]) ?>
     <?php // echo $form->field($model, 'month_num', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'最近3月楼盘点击']]) ?>
     <?php // echo $form->field($model, 'click_num', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'点击数量']]) ?>
     <?php // echo $form->field($model, 'sell_num', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'销售数量']]) ?>
     <?php // echo $form->field($model, 'pic_num', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'户型图，相册数量']]) ?>
     <?php // echo $form->field($model, 'borough_developer', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'开发商']]) ?>
     <?php // echo $form->field($model, 'is_checked', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否审核']]) ?>
     <?php // echo $form->field($model, 'isnew', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否新盘']]) ?>
     <?php // echo $form->field($model, 'creater', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'发布者,如果为：lpjacj表示采集']]) ?>
     <?php // echo $form->field($model, 'youhuiid', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘优惠id']]) ?>
     <?php // echo $form->field($model, 'house_url', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'楼盘短地址']]) ?>
     <?php // echo $form->field($model, 'alter_ip', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'修改ip']]) ?>
     <?php // echo $form->field($model, 'alter_name', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'修改者姓名']]) ?>
     <?php // echo $form->field($model, 'alter_time', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'修改时间']]) ?>
     <?php // echo $form->field($model, 'created', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'创建时间']]) ?>
     <?php // echo $form->field($model, 'orderby', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'排序']]) ?>
     <?php // echo $form->field($model, 'isdel', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否删除']]) ?>
     <?php // echo $form->field($model, 'evaluate_time', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'评估时间']]) ?>
     <?php // echo $form->field($model, 'buygroup', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'购买意向人数']]) ?>
     <?php // echo $form->field($model, 'tg_base_num', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'团购初始数量']]) ?>
     <?php // echo $form->field($model, 'qq_service', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'团购咨询qq']]) ?>
     <?php // echo $form->field($model, 'qq_group', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'团购qq群']]) ?>
     <?php // echo $form->field($model, 'is_hot', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Hot']]) ?>
     <?php // echo $form->field($model, 'is_hot_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'推荐排序']]) ?>
     <?php // echo $form->field($model, 'is_index_area', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页区域推荐']]) ?>
     <?php // echo $form->field($model, 'is_index_price', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页价格推荐']]) ?>
     <?php // echo $form->field($model, 'is_index_list', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页楼盘大全推荐']]) ?>
     <?php // echo $form->field($model, 'is_index_b_image', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页版块图片推荐']]) ?>
     <?php // echo $form->field($model, 'is_index_b_list', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页版块列表推荐']]) ?>
     <?php // echo $form->field($model, 'is_index_link', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'首页精品推荐']]) ?>
     <?php // echo $form->field($model, 'is_list_search', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'列表搜索推广推荐楼盘']]) ?>
     <?php // echo $form->field($model, 'is_m_guess_like', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端首页猜你喜欢']]) ?>
     <?php // echo $form->field($model, 'is_m_house_detail_tj', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端楼盘详情页推荐楼盘']]) ?>
     <?php // echo $form->field($model, 'is_m_hot_search', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端新房最近热搜推荐']]) ?>
     <?php // echo $form->field($model, 'created_at', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Created At']]) ?>
     <?php // echo $form->field($model, 'updated_at', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Updated At']]) ?>
     <?php // echo $form->field($model, 'weixinpic', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Weixinpic']]) ?>
     <?php // echo $form->field($model, 'videolink', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'视频连接']]) ?>
     <?php // echo $form->field($model, 'baidu_daohang_url', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'百度导航地址']]) ?>
     <?php // echo $form->field($model, 'weixin_2d_image', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'微信二维码']]) ?>
     <?php // echo $form->field($model, 'is_index_area_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index Area Sort']]) ?>
     <?php // echo $form->field($model, 'is_index_price_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index Price Sort']]) ?>
     <?php // echo $form->field($model, 'is_index_list_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index List Sort']]) ?>
     <?php // echo $form->field($model, 'is_index_b_image_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index B Image Sort']]) ?>
     <?php // echo $form->field($model, 'is_index_b_list_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index B List Sort']]) ?>
     <?php // echo $form->field($model, 'is_index_link_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is Index Link Sort']]) ?>
     <?php // echo $form->field($model, 'is_list_search_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Is List Search Sort']]) ?>
     <?php // echo $form->field($model, 'is_m_guess_like_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端首页猜你喜欢排序']]) ?>
     <?php // echo $form->field($model, 'is_m_house_detail_tj_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端楼盘详情页推荐楼盘排序']]) ?>
     <?php // echo $form->field($model, 'is_m_hot_search_sort', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'m端新房最近热搜推荐排序']]) ?>
     <?php // echo $form->field($model, 'sale_phone', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'Sale Phone']]) ?>
     <?php // echo $form->field($model, 'extra_attribute', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'额外的特色属性']]) ?>
     <?php // echo $form->field($model, 'if_gb_need_idcard', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'详情页团购表单是否可以输入身份证后六位']]) ?>
     <?php // echo $form->field($model, 'is_show', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否显示,1-显示,0-隐藏']]) ?>
     <?php // echo $form->field($model, 'sync_status', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'同步小区状态 1 未同步 2已同步']]) ?>
     <?php // echo $form->field($model, 'is_vr', ['labelOptions'=>['class'=>'sr-only'], 'inputOptions'=>['class'=>'form-control', 'placeholder'=>'是否有VR图片，1：有；0：没有']]) ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '搜索'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
