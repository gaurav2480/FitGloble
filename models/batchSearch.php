<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\batch;

/**
 * batchSearch represents the model behind the search form of `app\models\batch`.
 */
class batchSearch extends batch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batchID'], 'integer'],
            [['batch', 'status', 'activeDate', 'inactveDate'], 'safe'],
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
        $query = batch::find();

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
            'batchID' => $this->batchID,
        ]);

        $query->andFilterWhere(['like', 'batch', $this->batch])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'activeDate', $this->activeDate])
            ->andFilterWhere(['like', 'inactveDate', $this->inactveDate]);

        return $dataProvider;
    }
}
