<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_tipo_vivienda".
 *
 * @property integer $id
 * @property string $tipo_vivienda
 *
 * @property GestantesGtTGestantes[] $gestantesGtTGestantes
 */
class ptipovivienda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_tipo_vivienda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_vivienda'], 'required'],
            [['tipo_vivienda'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_vivienda' => 'Tipo Vivienda',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTGestantes()
    {
        return $this->hasMany(GestantesGtTGestantes::className(), ['id_gt_p_tipo_vivienda' => 'id']);
    }
}
