<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tubicacion;

/**
 * tubicacionSearch represents the model behind the search form about `app\models\tubicacion`.
 */
class tubicacionSearch extends tubicacion
{
    public $nombre;
    public $apellido;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documento', 'id_gt_t_gestantes'], 'integer'],
            [['nombre','apellido', 'fecha'], 'safe'],
            [['x', 'y'], 'number'],
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
        $query = tubicacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['documento', 'nombre', 'apellido', 'x', 'y', 'fecha']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idGtTGestantes');

        // grid filtering conditions
        $query->andFilterWhere([
            'x' => $this->x,
            'y' => $this->y,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'gt_t_gestantes.documento', $this->documento])
            ->andFilterWhere(['like', 'gt_t_gestantes.nombre', $this->nombre])
            ->andFilterWhere(['like', 'gt_t_gestantes.apellido', $this->apellido])

            ;

        return $dataProvider;
    }
}
