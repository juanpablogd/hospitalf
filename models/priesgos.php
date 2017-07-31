<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_riesgos".
 *
 * @property integer $id
 * @property string $nombre_riegos
 *
 * @property GestantesGtPasoGestanteRiesgo[] $gestantesGtPasoGestanteRiesgos
 */
class priesgos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_riesgos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_riesgos'], 'required'],
            [['nombre_riesgos'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_riesgos' => 'Nombre Riesgos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtPasoGestanteRiesgos()
    {
        return $this->hasMany(GestantesGtPasoGestanteRiesgo::className(), ['id_gt_p_riesgos' => 'id']);
    }
}
