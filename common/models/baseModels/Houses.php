<?php

namespace common\models\baseModels;

use Yii;
use yii\behaviors\AttributeBehavior;
use common\components\ActiveRecord;
use common\components\behaviors\DatetimeBehavior;

/**
 * This is the model class for table "{{%houses}}".
 *
 * @property integer $id
 * @property integer $oldid
 * @property string $borough_name
 * @property string $pinyin
 * @property string $borough_names
 * @property string $borough_alias
 * @property string $borough_address
 * @property string $borough_letter
 * @property integer $cityid
 * @property string $cityname
 * @property string $youhui_discount
 * @property integer $cityarea_id
 * @property integer $info_price
 * @property integer $start_price
 * @property integer $hight_price
 * @property integer $suggest_price
 * @property integer $price_unit
 * @property integer $borough_section
 * @property string $borough_level
 * @property string $borough_level_info
 * @property integer $borough_type_old
 * @property integer $borough_type
 * @property integer $borough_type2
 * @property string $attribute
 * @property integer $borough_houses
 * @property integer $borough_typeof
 * @property integer $borough_frame
 * @property integer $borough_sale
 * @property integer $is_sell_out
 * @property string $room_type
 * @property double $map_lng
 * @property double $map_lat
 * @property string $layout_map
 * @property integer $layout_zoom
 * @property string $borough_thumb
 * @property string $borough_thumb_weixin
 * @property string $sell_phone
 * @property string $house_phone
 * @property integer $only_sell_phone
 * @property integer $sell_time_int
 * @property integer $sell_time_slot
 * @property string $sell_time
 * @property integer $borough_completion_int
 * @property integer $is_qifang
 * @property integer $is_xianfang
 * @property integer $month_num
 * @property integer $click_num
 * @property integer $sell_num
 * @property string $pic_num
 * @property string $borough_developer
 * @property integer $is_checked
 * @property integer $isnew
 * @property string $creater
 * @property integer $youhuiid
 * @property string $house_url
 * @property string $alter_ip
 * @property string $alter_name
 * @property integer $alter_time
 * @property integer $created
 * @property integer $orderby
 * @property integer $isdel
 * @property integer $evaluate_time
 * @property integer $buygroup
 * @property integer $tg_base_num
 * @property string $qq_service
 * @property string $qq_group
 * @property integer $is_hot
 * @property integer $is_hot_sort
 * @property integer $is_index_area
 * @property integer $is_index_price
 * @property integer $is_index_list
 * @property integer $is_index_b_image
 * @property integer $is_index_b_list
 * @property integer $is_index_link
 * @property integer $is_list_search
 * @property integer $is_m_guess_like
 * @property integer $is_m_house_detail_tj
 * @property integer $is_m_hot_search
 * @property string $created_at
 * @property string $updated_at
 * @property string $weixinpic
 * @property string $videolink
 * @property string $baidu_daohang_url
 * @property string $weixin_2d_image
 * @property integer $is_index_area_sort
 * @property integer $is_index_price_sort
 * @property integer $is_index_list_sort
 * @property integer $is_index_b_image_sort
 * @property integer $is_index_b_list_sort
 * @property integer $is_index_link_sort
 * @property integer $is_list_search_sort
 * @property integer $is_m_guess_like_sort
 * @property integer $is_m_house_detail_tj_sort
 * @property integer $is_m_hot_search_sort
 * @property string $sale_phone
 * @property string $extra_attribute
 * @property integer $if_gb_need_idcard
 * @property integer $is_show
 * @property integer $sync_status
 * @property integer $is_vr
 */
class Houses extends \common\components\ActiveRecord
{
    public static $modelName = '楼盘列表';
    public $fileAttributes = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%houses}}';
    }
    public function behaviors()
    {
        return [
            DatetimeBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oldid', 'cityid', 'cityarea_id', 'info_price', 'start_price', 'hight_price', 'suggest_price', 'borough_section', 'borough_type_old', 'borough_type', 'borough_type2', 'borough_houses', 'borough_typeof', 'borough_frame', 'borough_sale', 'sell_time_int', 'borough_completion_int', 'month_num', 'click_num', 'sell_num', 'youhuiid', 'alter_time', 'created', 'orderby', 'evaluate_time', 'buygroup', 'tg_base_num', 'is_hot_sort', 'is_index_list', 'is_index_area_sort', 'is_index_price_sort', 'is_index_list_sort', 'is_index_b_image_sort', 'is_index_b_list_sort', 'is_index_link_sort', 'is_list_search_sort', 'is_m_guess_like_sort', 'is_m_house_detail_tj_sort', 'is_m_hot_search_sort'], 'integer'],
            [['borough_name', 'pinyin', 'youhui_discount', 'sell_time_int', 'sell_time_slot', 'youhuiid', 'house_url', 'created', 'evaluate_time', 'buygroup', 'tg_base_num', 'weixinpic', 'videolink', 'baidu_daohang_url', 'weixin_2d_image'], 'required'],
            [['is_sell_out', 'is_qifang', 'is_xianfang', 'is_checked', 'is_hot', 'is_index_area', 'is_index_price', 'is_index_b_image', 'is_index_b_list', 'is_index_link', 'is_list_search', 'is_m_guess_like', 'is_m_house_detail_tj', 'is_m_hot_search', 'is_show', 'is_vr'], 'boolean'],
            [['room_type'], 'string'],
            [['map_lng', 'map_lat'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['borough_name', 'pinyin', 'borough_alias', 'borough_level_info', 'borough_thumb', 'house_phone', 'sell_time', 'borough_developer', 'house_url', 'weixin_2d_image', 'sale_phone'], 'string', 'max' => 100],
            [['borough_names', 'attribute', 'videolink', 'baidu_daohang_url', 'extra_attribute'], 'string', 'max' => 255],
            [['borough_address', 'sell_phone'], 'string', 'max' => 250],
            [['borough_letter', 'pic_num'], 'string', 'max' => 50],
            [['cityname'], 'string', 'max' => 60],
            [['youhui_discount'], 'string', 'max' => 225],
            [['borough_level', 'weixinpic'], 'string', 'max' => 200],
            [['layout_map'], 'string', 'max' => 150],
            [['borough_thumb_weixin'], 'string', 'max' => 256],
            [['creater', 'alter_name'], 'string', 'max' => 20],
            [['alter_ip'], 'string', 'max' => 15],
            [['qq_service', 'qq_group'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'oldid' => Yii::t('app', '旧id'),
            'borough_name' => Yii::t('app', '楼盘名称'),
            'pinyin' => Yii::t('app', '楼盘名称全拼'),
            'borough_names' => Yii::t('app', '相似名称'),
            'borough_alias' => Yii::t('app', '项目期数'),
            'borough_address' => Yii::t('app', '项目位置'),
            'borough_letter' => Yii::t('app', '楼盘字母表示'),
            'cityid' => Yii::t('app', '站点城市ID'),
            'cityname' => Yii::t('app', '城市名称'),
            'youhui_discount' => Yii::t('app', '优惠'),
            'cityarea_id' => Yii::t('app', '区域id'),
            'info_price' => Yii::t('app', '楼盘价格'),
            'start_price' => Yii::t('app', '最低价'),
            'hight_price' => Yii::t('app', '最高价'),
            'suggest_price' => Yii::t('app', '参考价格'),
            'price_unit' => Yii::t('app', '价格单位，1是元/㎡,2是万元/套'),
            'borough_section' => Yii::t('app', '楼盘版块'),
            'borough_level' => Yii::t('app', '装修状态'),
            'borough_level_info' => Yii::t('app', '装修描述'),
            'borough_type_old' => Yii::t('app', '物业类型旧'),
            'borough_type' => Yii::t('app', '物业类型'),
            'borough_type2' => Yii::t('app', '物业类型分类'),
            'attribute' => Yii::t('app', '特色属性'),
            'borough_houses' => Yii::t('app', '房屋属性'),
            'borough_typeof' => Yii::t('app', '建筑类型'),
            'borough_frame' => Yii::t('app', '建筑结构'),
            'borough_sale' => Yii::t('app', '销售状态'),
            'is_sell_out' => Yii::t('app', '是否售完，1为售完，排序专用'),
            'room_type' => Yii::t('app', '户型描述'),
            'map_lng' => Yii::t('app', '楼盘经度'),
            'map_lat' => Yii::t('app', '楼盘纬度'),
            'layout_map' => Yii::t('app', '地图层'),
            'layout_zoom' => Yii::t('app', '地图层大小'),
            'borough_thumb' => Yii::t('app', '楼盘缩略图'),
            'borough_thumb_weixin' => Yii::t('app', '微信缩略图'),
            'sell_phone' => Yii::t('app', '售楼电话'),
            'house_phone' => Yii::t('app', '售楼电话,如果设置“只显示该电话”,前端则显示此售楼电话'),
            'only_sell_phone' => Yii::t('app', '是否只显示销售电话1=是 0=否'),
            'sell_time_int' => Yii::t('app', '开盘时间整形'),
            'sell_time_slot' => Yii::t('app', '开盘时间段'),
            'sell_time' => Yii::t('app', '开盘时间描述'),
            'borough_completion_int' => Yii::t('app', '入住时间'),
            'is_qifang' => Yii::t('app', '是否期房'),
            'is_xianfang' => Yii::t('app', '是否现房'),
            'month_num' => Yii::t('app', '最近3月楼盘点击'),
            'click_num' => Yii::t('app', '点击数量'),
            'sell_num' => Yii::t('app', '销售数量'),
            'pic_num' => Yii::t('app', '户型图，相册数量'),
            'borough_developer' => Yii::t('app', '开发商'),
            'is_checked' => Yii::t('app', '是否审核'),
            'isnew' => Yii::t('app', '是否新盘'),
            'creater' => Yii::t('app', '发布者,如果为：lpjacj表示采集'),
            'youhuiid' => Yii::t('app', '楼盘优惠id'),
            'house_url' => Yii::t('app', '楼盘短地址'),
            'alter_ip' => Yii::t('app', '修改ip'),
            'alter_name' => Yii::t('app', '修改者姓名'),
            'alter_time' => Yii::t('app', '修改时间'),
            'created' => Yii::t('app', '创建时间'),
            'orderby' => Yii::t('app', '排序'),
            'isdel' => Yii::t('app', '是否删除'),
            'evaluate_time' => Yii::t('app', '评估时间'),
            'buygroup' => Yii::t('app', '购买意向人数'),
            'tg_base_num' => Yii::t('app', '团购初始数量'),
            'qq_service' => Yii::t('app', '团购咨询qq'),
            'qq_group' => Yii::t('app', '团购qq群'),
            'is_hot' => Yii::t('app', 'Is Hot'),
            'is_hot_sort' => Yii::t('app', '推荐排序'),
            'is_index_area' => Yii::t('app', '首页区域推荐'),
            'is_index_price' => Yii::t('app', '首页价格推荐'),
            'is_index_list' => Yii::t('app', '首页楼盘大全推荐'),
            'is_index_b_image' => Yii::t('app', '首页版块图片推荐'),
            'is_index_b_list' => Yii::t('app', '首页版块列表推荐'),
            'is_index_link' => Yii::t('app', '首页精品推荐'),
            'is_list_search' => Yii::t('app', '列表搜索推广推荐楼盘'),
            'is_m_guess_like' => Yii::t('app', 'm端首页猜你喜欢'),
            'is_m_house_detail_tj' => Yii::t('app', 'm端楼盘详情页推荐楼盘'),
            'is_m_hot_search' => Yii::t('app', 'm端新房最近热搜推荐'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'weixinpic' => Yii::t('app', 'Weixinpic'),
            'videolink' => Yii::t('app', '视频连接'),
            'baidu_daohang_url' => Yii::t('app', '百度导航地址'),
            'weixin_2d_image' => Yii::t('app', '微信二维码'),
            'is_index_area_sort' => Yii::t('app', 'Is Index Area Sort'),
            'is_index_price_sort' => Yii::t('app', 'Is Index Price Sort'),
            'is_index_list_sort' => Yii::t('app', 'Is Index List Sort'),
            'is_index_b_image_sort' => Yii::t('app', 'Is Index B Image Sort'),
            'is_index_b_list_sort' => Yii::t('app', 'Is Index B List Sort'),
            'is_index_link_sort' => Yii::t('app', 'Is Index Link Sort'),
            'is_list_search_sort' => Yii::t('app', 'Is List Search Sort'),
            'is_m_guess_like_sort' => Yii::t('app', 'm端首页猜你喜欢排序'),
            'is_m_house_detail_tj_sort' => Yii::t('app', 'm端楼盘详情页推荐楼盘排序'),
            'is_m_hot_search_sort' => Yii::t('app', 'm端新房最近热搜推荐排序'),
            'sale_phone' => Yii::t('app', 'Sale Phone'),
            'extra_attribute' => Yii::t('app', '额外的特色属性'),
            'if_gb_need_idcard' => Yii::t('app', '详情页团购表单是否可以输入身份证后六位'),
            'is_show' => Yii::t('app', '是否显示,1-显示,0-隐藏'),
            'sync_status' => Yii::t('app', '同步小区状态 1 未同步 2已同步'),
            'is_vr' => Yii::t('app', '是否有VR图片，1：有；0：没有'),
        ];
    }
}
