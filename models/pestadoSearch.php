<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pestado;

/**
 * pestadoSearch represents the model behind the search form about `app\models\pestado`.
 */
class pestadoSearch extends pestado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'min_semana', 'max_semana'], 'integer'],
            [['estado', 'detalle_estado'], 'safe'],
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
        $query = pestado::find();

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
            'min_semana' => $this->min_semana,
            'max_semana' => $this->max_semana,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'detalle_estado', $this->detalle_estado]);

        return $dataProvider;
    }
}
