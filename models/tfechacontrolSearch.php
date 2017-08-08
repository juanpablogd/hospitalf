<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tfechacontrol;

/**
 * tfechacontrolSearch represents the model behind the search form about `app\models\tfechacontrol`.
 */
class tfechacontrolSearch extends tfechacontrol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gt_t_embarazo'], 'integer'],
            [['numero'],'integer','max'=>32767],
            [['documento', 'fecha'], 'safe'],
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
        $query = tfechacontrol::find();

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
            'fecha' => $this->fecha,
            'numero' => $this->numero,
            'id_gt_t_embarazo' => $this->id_gt_t_embarazo,
        ]);

        $query->andFilterWhere(['like', 'documento', $this->documento]);

        return $dataProvider;
    }
}
