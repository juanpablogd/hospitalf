<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\prangoscontrol;

/**
 * prangoscontrolSearch represents the model behind the search form about `app\models\prangoscontrol`.
 */
class prangoscontrolSearch extends prangoscontrol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'frecuencia_dias', 'semana_min', 'semana_max'], 'integer'],
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
        $query = prangoscontrol::find();

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
            'frecuencia_dias' => $this->frecuencia_dias,
            'semana_min' => $this->semana_min,
            'semana_max' => $this->semana_max,
        ]);

        return $dataProvider;
    }
}
