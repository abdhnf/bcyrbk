<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Yearbook;

/**
 * YearbookSearch represents the model behind the search form about `app\models\Yearbook`.
 */
class YearbookSearch extends Yearbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_yearbook', 'name_yearbook', 'address_yearbook', 'description_yearbook', 'thumbnail_yearbook', 'header_yearbook', 'file_yearbook'], 'safe'],
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
        $query = Yearbook::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id_yearbook', $this->id_yearbook])
            ->andFilterWhere(['like', 'name_yearbook', $this->name_yearbook])
            ->andFilterWhere(['like', 'address_yearbook', $this->address_yearbook])
            ->andFilterWhere(['like', 'description_yearbook', $this->description_yearbook])
            ->andFilterWhere(['like', 'thumbnail_yearbook', $this->thumbnail_yearbook])
            ->andFilterWhere(['like', 'header_yearbook', $this->header_yearbook])
            ->andFilterWhere(['like', 'file_yearbook', $this->file_yearbook]);

        return $dataProvider;
    }
}
