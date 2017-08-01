<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pcie10;

/**
 * pcie10Search represents the model behind the search form about `app\models\pcie10`.
 */
class pcie10Search extends pcie10
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cod_cie10', 'id_gt_p_estado'], 'safe'],
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
        $query = pcie10::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['cod_cie10', 'id_gt_p_estado']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idGtPEstado');

        // grid filtering conditions
        $query->andFilterWhere(['like', 'LOWER(cod_cie10)', strtolower($this->cod_cie10)])
            ->andFilterWhere(['like', 'LOWER(estado)', strtolower($this->id_gt_p_estado)])
        ;

        return $dataProvider;
    }
}
