<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_rangos_control".
 *
 * @property integer $id
 * @property integer $frecuencia_dias
 * @property integer $semana_min
 * @property integer $semana_max
 */
class prangoscontrol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_rangos_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['frecuencia_dias', 'semana_min', 'semana_max'], 'required'],
            [['frecuencia_dias', 'semana_min', 'semana_max'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'frecuencia_dias' => 'Frecuencia Dias',
            'semana_min' => 'Semana Min',
            'semana_max' => 'Semana Max',
        ];
    }
}
