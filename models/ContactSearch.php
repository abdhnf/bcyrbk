<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contact;

/**
 * ContactSearch represents the model behind the search form about `app\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_contact'], 'integer'],
            [['full_name', 'email_contact', 'subject_contact', 'message', 'type', 'create_contact', 'update_contact'], 'safe'],
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
        $query = Contact::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_contact' => $this->id_contact,
            'create_contact' => $this->create_contact,
            'update_contact' => $this->update_contact,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'email_contact', $this->email_contact])
            ->andFilterWhere(['like', 'subject_contact', $this->subject_contact])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
