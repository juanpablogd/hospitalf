<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tembarazo;

/**
 * tembarazoSearch represents the model behind the search form about `app\models\tembarazo`.
 */
class tembarazoSearch extends tembarazo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_control_prenatal', 'edad_gesta_inicio_semana', 'id_gt_t_gestantes', 'id_gt_p_estado'], 'integer'],
            [['fecha_ultima_regla', 'fecha_control_prenatal', 'fecha_parto', 'tension_arterial'], 'safe'],
            [['imc'], 'number'],
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
        $query = tembarazo::find();

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
            'fecha_ultima_regla' => $this->fecha_ultima_regla,
            'no_control_prenatal' => $this->no_control_prenatal,
            'fecha_control_prenatal' => $this->fecha_control_prenatal,
            'edad_gesta_inicio_semana' => $this->edad_gesta_inicio_semana,
            'imc' => $this->imc,
            'fecha_parto' => $this->fecha_parto,
            'id_gt_t_gestantes' => $this->id_gt_t_gestantes,
            'id_gt_p_estado' => $this->id_gt_p_estado,
        ]);

        $query->andFilterWhere(['like', 'tension_arterial', $this->tension_arterial]);

        return $dataProvider;
    }
}
