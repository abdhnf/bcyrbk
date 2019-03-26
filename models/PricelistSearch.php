<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pricelist;

/**
 * PricelistSearch represents the model behind the search form about `app\models\Pricelist`.
 */
class PricelistSearch extends Pricelist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pricelist', 'name_pricelist', 'cost_pricelist', 'description_pricelist', 'image_pricelist'], 'safe'],
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
        $query = Pricelist::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id_pricelist', $this->id_pricelist])
            ->andFilterWhere(['like', 'name_pricelist', $this->name_pricelist])
            ->andFilterWhere(['like', 'cost_pricelist', $this->cost_pricelist])
            ->andFilterWhere(['like', 'description_pricelist', $this->description_pricelist])
            ->andFilterWhere(['like', 'image_pricelist', $this->image_pricelist]);

        return $dataProvider;
    }
}
