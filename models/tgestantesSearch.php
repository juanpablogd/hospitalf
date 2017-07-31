<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tgestantes;

/**
 * tgestantesSearch represents the model behind the search form about `app\models\tgestantes`.
 */
class tgestantesSearch extends tgestantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'numero_ocupantes', 'no_partos', 'no_abortos', 'no_partos_pretermino', 'id_gt_p_ingresos', 'id_gt_p_tipo_vivienda'], 'integer'],
            [['documento', 'nombre', 'apellido', 'eps', 'fecha_nacimiento', 'zona', 'direccion', 'telefono_1', 'telefono_2'], 'safe'],
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
        $query = tgestantes::find();

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
            'numero_ocupantes' => $this->numero_ocupantes,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'no_partos' => $this->no_partos,
            'no_abortos' => $this->no_abortos,
            'no_partos_pretermino' => $this->no_partos_pretermino,
            'id_gt_p_ingresos' => $this->id_gt_p_ingresos,
            'id_gt_p_tipo_vivienda' => $this->id_gt_p_tipo_vivienda,
        ]);

        $query->andFilterWhere(['like', 'documento', $this->documento])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'eps', $this->eps])
            ->andFilterWhere(['like', 'zona', $this->zona])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono_1', $this->telefono_1])
            ->andFilterWhere(['like', 'telefono_2', $this->telefono_2]);

        return $dataProvider;
    }
}
