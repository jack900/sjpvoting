<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Campaign;

/**
 * CampaignSearch represents the model behind the search form of `app\modules\admin\models\Campaign`.
 */
class CampaignSearch extends Campaign
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by'], 'integer'],
            [['election_name', 'election_term', 'election_start', 'election_end', 'description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Campaign::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'election_start' => $this->election_start,
            'election_end' => $this->election_end,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'election_name', $this->election_name])
            ->andFilterWhere(['like', 'election_term', $this->election_term])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
