<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\psgestanteriesgo;

/**
 * psgestanteriesgoSearch represents the model behind the search form about `app\models\psgestanteriesgo`.
 */
class psgestanteriesgoSearch extends psgestanteriesgo
{
    public $nombre_riesgos;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gt_t_embarazo', 'id_gt_p_riesgos'], 'integer'],
            [['nombre_riesgos'], 'safe'],
            [['riesgo'], 'boolean'],
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
        $query = psgestanteriesgo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['riesgo', 'nombre_riesgos']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idGtPRiesgos');

        // grid filtering conditions
        $query->andFilterWhere([
            'riesgo' => $this->riesgo,
        ]);
        $query->andFilterWhere(['like', 'LOWER(gt_p_riesgos.nombre_riesgos)', strtolower($this->nombre_riesgos)]);

        return $dataProvider;
    }
}
