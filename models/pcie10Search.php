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
            [['id', 'id_gt_p_estado'], 'integer'],
            [['cod_cie10'], 'safe'],
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
            'id_gt_p_estado' => $this->id_gt_p_estado,
        ]);

        $query->andFilterWhere(['like', 'cod_cie10', $this->cod_cie10]);

        return $dataProvider;
    }
}
