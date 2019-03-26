<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GalleryYearbook;

/**
 * SearchGalleryYearbook represents the model behind the search form about `app\models\GalleryYearbook`.
 */
class SearchGalleryYearbook extends GalleryYearbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gallery_yearbook', 'image_gallery_yearbook', 'id_yearbook'], 'safe'],
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
        $query = GalleryYearbook::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id_gallery_yearbook', $this->id_gallery_yearbook])
            ->andFilterWhere(['like', 'image_gallery_yearbook', $this->image_gallery_yearbook])
            ->andFilterWhere(['like', 'id_yearbook', $this->id_yearbook]);

        return $dataProvider;
    }
}
