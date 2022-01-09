<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Houses;

/**
 * HouseSearch represents the model behind the search form about `backend\models\Houses`.
 */
class HouseSearch extends Houses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'oldid', 'cityid', 'cityarea_id', 'info_price', 'start_price', 'hight_price', 'suggest_price', 'price_unit', 'borough_section', 'borough_type_old', 'borough_type', 'borough_type2', 'borough_houses', 'borough_typeof', 'borough_frame', 'borough_sale', 'is_sell_out', 'layout_zoom', 'only_sell_phone', 'sell_time_int', 'sell_time_slot', 'borough_completion_int', 'is_qifang', 'is_xianfang', 'month_num', 'click_num', 'sell_num', 'is_checked', 'isnew', 'youhuiid', 'alter_time', 'created', 'orderby', 'isdel', 'evaluate_time', 'buygroup', 'tg_base_num', 'is_hot', 'is_hot_sort', 'is_index_area', 'is_index_price', 'is_index_list', 'is_index_b_image', 'is_index_b_list', 'is_index_link', 'is_list_search', 'is_m_guess_like', 'is_m_house_detail_tj', 'is_m_hot_search', 'is_index_area_sort', 'is_index_price_sort', 'is_index_list_sort', 'is_index_b_image_sort', 'is_index_b_list_sort', 'is_index_link_sort', 'is_list_search_sort', 'is_m_guess_like_sort', 'is_m_house_detail_tj_sort', 'is_m_hot_search_sort', 'if_gb_need_idcard', 'is_show', 'sync_status', 'is_vr'], 'integer'],
            [['borough_name', 'pinyin', 'borough_names', 'borough_alias', 'borough_address', 'borough_letter', 'cityname', 'youhui_discount', 'borough_level', 'borough_level_info', 'attribute', 'room_type', 'layout_map', 'borough_thumb', 'borough_thumb_weixin', 'sell_phone', 'house_phone', 'sell_time', 'pic_num', 'borough_developer', 'creater', 'house_url', 'alter_ip', 'alter_name', 'qq_service', 'qq_group', 'created_at', 'updated_at', 'weixinpic', 'videolink', 'baidu_daohang_url', 'weixin_2d_image', 'sale_phone', 'extra_attribute'], 'safe'],
            [['map_lng', 'map_lat'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Houses::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>['defaultOrder'=>['id'=> SORT_DESC]],
            'pagination'=>['validatePage'=>false],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'oldid' => $this->oldid,
            'cityid' => $this->cityid,
            'cityarea_id' => $this->cityarea_id,
            'info_price' => $this->info_price,
            'start_price' => $this->start_price,
            'hight_price' => $this->hight_price,
            'suggest_price' => $this->suggest_price,
            'price_unit' => $this->price_unit,
            'borough_section' => $this->borough_section,
            'borough_type_old' => $this->borough_type_old,
            'borough_type' => $this->borough_type,
            'borough_type2' => $this->borough_type2,
            'borough_houses' => $this->borough_houses,
            'borough_typeof' => $this->borough_typeof,
            'borough_frame' => $this->borough_frame,
            'borough_sale' => $this->borough_sale,
            'is_sell_out' => $this->is_sell_out,
            'map_lng' => $this->map_lng,
            'map_lat' => $this->map_lat,
            'layout_zoom' => $this->layout_zoom,
            'only_sell_phone' => $this->only_sell_phone,
            'sell_time_int' => $this->sell_time_int,
            'sell_time_slot' => $this->sell_time_slot,
            'borough_completion_int' => $this->borough_completion_int,
            'is_qifang' => $this->is_qifang,
            'is_xianfang' => $this->is_xianfang,
            'month_num' => $this->month_num,
            'click_num' => $this->click_num,
            'sell_num' => $this->sell_num,
            'is_checked' => $this->is_checked,
            'isnew' => $this->isnew,
            'youhuiid' => $this->youhuiid,
            'alter_time' => $this->alter_time,
            'created' => $this->created,
            'orderby' => $this->orderby,
            'isdel' => $this->isdel,
            'evaluate_time' => $this->evaluate_time,
            'buygroup' => $this->buygroup,
            'tg_base_num' => $this->tg_base_num,
            'is_hot' => $this->is_hot,
            'is_hot_sort' => $this->is_hot_sort,
            'is_index_area' => $this->is_index_area,
            'is_index_price' => $this->is_index_price,
            'is_index_list' => $this->is_index_list,
            'is_index_b_image' => $this->is_index_b_image,
            'is_index_b_list' => $this->is_index_b_list,
            'is_index_link' => $this->is_index_link,
            'is_list_search' => $this->is_list_search,
            'is_m_guess_like' => $this->is_m_guess_like,
            'is_m_house_detail_tj' => $this->is_m_house_detail_tj,
            'is_m_hot_search' => $this->is_m_hot_search,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_index_area_sort' => $this->is_index_area_sort,
            'is_index_price_sort' => $this->is_index_price_sort,
            'is_index_list_sort' => $this->is_index_list_sort,
            'is_index_b_image_sort' => $this->is_index_b_image_sort,
            'is_index_b_list_sort' => $this->is_index_b_list_sort,
            'is_index_link_sort' => $this->is_index_link_sort,
            'is_list_search_sort' => $this->is_list_search_sort,
            'is_m_guess_like_sort' => $this->is_m_guess_like_sort,
            'is_m_house_detail_tj_sort' => $this->is_m_house_detail_tj_sort,
            'is_m_hot_search_sort' => $this->is_m_hot_search_sort,
            'if_gb_need_idcard' => $this->if_gb_need_idcard,
            'is_show' => $this->is_show,
            'sync_status' => $this->sync_status,
            'is_vr' => $this->is_vr,
        ]);

        $query->andFilterWhere(['like', 'borough_name', $this->borough_name])
            ->andFilterWhere(['like', 'pinyin', $this->pinyin])
            ->andFilterWhere(['like', 'borough_names', $this->borough_names])
            ->andFilterWhere(['like', 'borough_alias', $this->borough_alias])
            ->andFilterWhere(['like', 'borough_address', $this->borough_address])
            ->andFilterWhere(['like', 'borough_letter', $this->borough_letter])
            ->andFilterWhere(['like', 'cityname', $this->cityname])
            ->andFilterWhere(['like', 'youhui_discount', $this->youhui_discount])
            ->andFilterWhere(['like', 'borough_level', $this->borough_level])
            ->andFilterWhere(['like', 'borough_level_info', $this->borough_level_info])
            ->andFilterWhere(['like', 'attribute', $this->attribute])
            ->andFilterWhere(['like', 'room_type', $this->room_type])
            ->andFilterWhere(['like', 'layout_map', $this->layout_map])
            ->andFilterWhere(['like', 'borough_thumb', $this->borough_thumb])
            ->andFilterWhere(['like', 'borough_thumb_weixin', $this->borough_thumb_weixin])
            ->andFilterWhere(['like', 'sell_phone', $this->sell_phone])
            ->andFilterWhere(['like', 'house_phone', $this->house_phone])
            ->andFilterWhere(['like', 'sell_time', $this->sell_time])
            ->andFilterWhere(['like', 'pic_num', $this->pic_num])
            ->andFilterWhere(['like', 'borough_developer', $this->borough_developer])
            ->andFilterWhere(['like', 'creater', $this->creater])
            ->andFilterWhere(['like', 'house_url', $this->house_url])
            ->andFilterWhere(['like', 'alter_ip', $this->alter_ip])
            ->andFilterWhere(['like', 'alter_name', $this->alter_name])
            ->andFilterWhere(['like', 'qq_service', $this->qq_service])
            ->andFilterWhere(['like', 'qq_group', $this->qq_group])
            ->andFilterWhere(['like', 'weixinpic', $this->weixinpic])
            ->andFilterWhere(['like', 'videolink', $this->videolink])
            ->andFilterWhere(['like', 'baidu_daohang_url', $this->baidu_daohang_url])
            ->andFilterWhere(['like', 'weixin_2d_image', $this->weixin_2d_image])
            ->andFilterWhere(['like', 'sale_phone', $this->sale_phone])
            ->andFilterWhere(['like', 'extra_attribute', $this->extra_attribute]);

        return $dataProvider;
    }
}
