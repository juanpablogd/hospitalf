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
    public $documento;
    public $nombre;
    public $apellido;
    public $estado;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_control_prenatal'], 'integer'],
            [['documento','nombre','apellido', 'estado','fecha_ultima_regla'], 'safe'],
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
            'sort' => ['attributes' => ['documento', 'nombre', 'apellido', 'estado', 'fecha_ultima_regla', 'no_control_prenatal']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idGtTGestantes');
        $query->joinWith('idGtPEstado');

        // grid filtering conditions
        $query->andFilterWhere([
            'fecha_ultima_regla' => $this->fecha_ultima_regla,
            'no_control_prenatal' => $this->no_control_prenatal,
        ]);

        $query->andFilterWhere(['like', 'LOWER(gt_t_gestantes.documento)', strtolower($this->documento)])
            ->andFilterWhere(['like', 'LOWER(gt_t_gestantes.nombre)', strtolower($this->nombre)])
            ->andFilterWhere(['like', 'LOWER(gt_t_gestantes.apellido)', strtolower($this->apellido)])
            ->andFilterWhere(['like', 'LOWER(gt_p_estado.estado)', strtolower($this->estado)])
        ;

        return $dataProvider;
    }
}

