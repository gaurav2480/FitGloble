<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\customers;

/**
 * customersSearch represents the model behind the search form of `app\models\customers`.
 */
class customersSearch extends customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Customer_ID', 'User_ID'], 'integer'],
            [['Receipt_No', 'Date', 'Customer_Name', 'Date_Of_Birth', 'Age', 'Address', 'Mobile_Number', 'Alternate_Number', 'Batch_Timing', 'Locker_No', 'Fitness_Goals', 'Medical_Conditions', 'Created_Date', 'Expiry_Date', 'Employment_Status', 'Status','Gender'], 'safe'],
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
        $query = customers::find();

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
            'Customer_ID' => $this->Customer_ID,
            'User_ID' => $this->User_ID,
        ]);

        $query->andFilterWhere(['like', 'Receipt_No', $this->Receipt_No])
            ->andFilterWhere(['like', 'Date', $this->Date])
            ->andFilterWhere(['like', 'Customer_Name', $this->Customer_Name])
            ->andFilterWhere(['like', 'Date_Of_Birth', $this->Date_Of_Birth])
            ->andFilterWhere(['like', 'Age', $this->Age])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Mobile_Number', $this->Mobile_Number])
            ->andFilterWhere(['like', 'Alternate_Number', $this->Alternate_Number])
            ->andFilterWhere(['like', 'Batch_Timing', $this->Batch_Timing])
            ->andFilterWhere(['like', 'Locker_No', $this->Locker_No])
            ->andFilterWhere(['like', 'Fitness_Goals', $this->Fitness_Goals])
            ->andFilterWhere(['like', 'Medical_Conditions', $this->Medical_Conditions])
            ->andFilterWhere(['like', 'Created_Date', $this->Created_Date])
            ->andFilterWhere(['like', 'Expiry_Date', $this->Expiry_Date])
            ->andFilterWhere(['like', 'Employment_Status', $this->Employment_Status])
            ->andFilterWhere(['like', 'Status', $this->Status])
             ->andFilterWhere(['like', 'Gender', $this->Gender]);

        return $dataProvider;
    }
}
