<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_estado".
 *
 * @property integer $id
 * @property string $estado
 * @property string $detalle_estado
 * @property integer $min_semana
 * @property integer $max_semana
 *
 * @property GestantesGtPCie10[] $gestantesGtPCie10s
 * @property GestantesGtTEmbarazo $gestantesGtTEmbarazo
 */
class pestado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado', 'detalle_estado', 'min_semana'], 'required'],
            [['min_semana', 'max_semana'], 'integer'],
            [['estado', 'detalle_estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
            'detalle_estado' => 'Detalle Estado',
            'min_semana' => 'Min. Semana',
            'max_semana' => 'Max. Semana',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFullEstado()
    {
      return $this->detalle_estado . " (" . $this->min_semana . " - " . $this->max_semana . ")";
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtPCie10s()
    {
        return $this->hasMany(GestantesGtPCie10::className(), ['id_gt_p_estado' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTEmbarazo()
    {
        return $this->hasOne(GestantesGtTEmbarazo::className(), ['id_gt_p_estado' => 'id']);
    }
}
