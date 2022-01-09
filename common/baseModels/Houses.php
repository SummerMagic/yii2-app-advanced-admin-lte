<?php

namespace common\baseModels;

use Yii;

/**
 * This is the model class for table "lp_houses".
 *
 * @property int $id
 * @property int $oldid 旧id
 * @property string $borough_name 楼盘名称
 * @property string $pinyin 楼盘名称全拼
 * @property string|null $borough_names 相似名称
 * @property string|null $borough_alias 项目期数
 * @property string|null $borough_address 项目位置
 * @property string|null $borough_letter 楼盘字母表示
 * @property int $cityid 站点城市ID
 * @property string|null $cityname 城市名称
 * @property string $youhui_discount 优惠
 * @property int|null $cityarea_id 区域id
 * @property int $info_price 楼盘价格
 * @property int $start_price 最低价
 * @property int $hight_price 最高价
 * @property int $suggest_price 参考价格
 * @property int $price_unit 价格单位，1是元/㎡,2是万元/套
 * @property int|null $borough_section 楼盘版块
 * @property string|null $borough_level 装修状态
 * @property string|null $borough_level_info 装修描述
 * @property int|null $borough_type_old 物业类型旧
 * @property int $borough_type 物业类型
 * @property int|null $borough_type2 物业类型分类
 * @property string|null $attribute 特色属性
 * @property int|null $borough_houses 房屋属性
 * @property int|null $borough_typeof 建筑类型
 * @property int|null $borough_frame 建筑结构
 * @property int $borough_sale 销售状态
 * @property int $is_sell_out 是否售完，1为售完，排序专用
 * @property string|null $room_type 户型描述
 * @property float|null $map_lng 楼盘经度
 * @property float|null $map_lat 楼盘纬度
 * @property string|null $layout_map 地图层
 * @property int|null $layout_zoom 地图层大小
 * @property string|null $borough_thumb 楼盘缩略图
 * @property string|null $borough_thumb_weixin 微信缩略图
 * @property string|null $sell_phone 售楼电话
 * @property string|null $house_phone 售楼电话,如果设置“只显示该电话”,前端则显示此售楼电话
 * @property int $only_sell_phone 是否只显示销售电话1=是 0=否
 * @property int $sell_time_int 开盘时间整形
 * @property int $sell_time_slot 开盘时间段
 * @property string|null $sell_time 开盘时间描述
 * @property int|null $borough_completion_int 入住时间
 * @property int $is_qifang 是否期房
 * @property int $is_xianfang 是否现房
 * @property int $month_num 最近3月楼盘点击
 * @property int|null $click_num 点击数量
 * @property int|null $sell_num 销售数量
 * @property string|null $pic_num 户型图，相册数量
 * @property string|null $borough_developer 开发商
 * @property int $is_checked 是否审核
 * @property int|null $isnew 是否新盘
 * @property string|null $creater 发布者,如果为：lpjacj表示采集
 * @property int $youhuiid 楼盘优惠id
 * @property string $house_url 楼盘短地址
 * @property string|null $alter_ip 修改ip
 * @property string|null $alter_name 修改者姓名
 * @property int|null $alter_time 修改时间
 * @property int $created 创建时间
 * @property int|null $orderby 排序
 * @property int|null $isdel 是否删除
 * @property int $evaluate_time 评估时间
 * @property int $buygroup 购买意向人数
 * @property int $tg_base_num 团购初始数量
 * @property string|null $qq_service 团购咨询qq
 * @property string|null $qq_group 团购qq群
 * @property int $is_hot
 * @property int $is_hot_sort 推荐排序
 * @property int $is_index_area 首页区域推荐
 * @property int $is_index_price 首页价格推荐
 * @property int $is_index_list 首页楼盘大全推荐
 * @property int $is_index_b_image 首页版块图片推荐
 * @property int $is_index_b_list 首页版块列表推荐
 * @property int $is_index_link 首页精品推荐
 * @property int $is_list_search 列表搜索推广推荐楼盘
 * @property int $is_m_guess_like m端首页猜你喜欢
 * @property int $is_m_house_detail_tj m端楼盘详情页推荐楼盘
 * @property int $is_m_hot_search m端新房最近热搜推荐
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string $weixinpic
 * @property string $videolink 视频连接
 * @property string $baidu_daohang_url 百度导航地址
 * @property string $weixin_2d_image 微信二维码
 * @property int $is_index_area_sort
 * @property int $is_index_price_sort
 * @property int $is_index_list_sort
 * @property int $is_index_b_image_sort
 * @property int $is_index_b_list_sort
 * @property int $is_index_link_sort
 * @property int $is_list_search_sort
 * @property int $is_m_guess_like_sort m端首页猜你喜欢排序
 * @property int $is_m_house_detail_tj_sort m端楼盘详情页推荐楼盘排序
 * @property int $is_m_hot_search_sort m端新房最近热搜推荐排序
 * @property string|null $sale_phone
 * @property string $extra_attribute 额外的特色属性
 * @property int $if_gb_need_idcard 详情页团购表单是否可以输入身份证后六位
 * @property int $is_show 是否显示,1-显示,0-隐藏
 * @property int $sync_status 同步小区状态 1 未同步 2已同步
 * @property int $is_vr 是否有VR图片，1：有；0：没有
 */
class Houses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lp_houses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oldid', 'cityid', 'cityarea_id', 'info_price', 'start_price', 'hight_price', 'suggest_price', 'price_unit', 'borough_section', 'borough_type_old', 'borough_type', 'borough_type2', 'borough_houses', 'borough_typeof', 'borough_frame', 'borough_sale', 'is_sell_out', 'layout_zoom', 'only_sell_phone', 'sell_time_int', 'sell_time_slot', 'borough_completion_int', 'is_qifang', 'is_xianfang', 'month_num', 'click_num', 'sell_num', 'is_checked', 'isnew', 'youhuiid', 'alter_time', 'created', 'orderby', 'isdel', 'evaluate_time', 'buygroup', 'tg_base_num', 'is_hot', 'is_hot_sort', 'is_index_area', 'is_index_price', 'is_index_list', 'is_index_b_image', 'is_index_b_list', 'is_index_link', 'is_list_search', 'is_m_guess_like', 'is_m_house_detail_tj', 'is_m_hot_search', 'is_index_area_sort', 'is_index_price_sort', 'is_index_list_sort', 'is_index_b_image_sort', 'is_index_b_list_sort', 'is_index_link_sort', 'is_list_search_sort', 'is_m_guess_like_sort', 'is_m_house_detail_tj_sort', 'is_m_hot_search_sort', 'if_gb_need_idcard', 'is_show', 'sync_status', 'is_vr'], 'integer'],
            [['borough_name', 'pinyin', 'youhui_discount', 'sell_time_int', 'sell_time_slot', 'youhuiid', 'house_url', 'created', 'evaluate_time', 'buygroup', 'tg_base_num', 'weixinpic', 'videolink', 'baidu_daohang_url', 'weixin_2d_image'], 'required'],
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
            [['qq_service', 'qq_group'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
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
