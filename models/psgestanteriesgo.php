<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_paso_gestante_riesgo".
 *
 * @property integer $id
 * @property boolean $riesgo
 * @property integer $id_gt_t_embarazo
 * @property integer $id_gt_p_riesgos
 *
 * @property GestantesGtPRiesgos $idGtPRiesgos
 * @property GestantesGtTEmbarazo $idGtTEmbarazo
 */
class psgestanteriesgo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_paso_gestante_riesgo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['riesgo'], 'boolean'],
            [['id_gt_t_embarazo', 'id_gt_p_riesgos'], 'required'],
            [['id_gt_t_embarazo', 'id_gt_p_riesgos'], 'integer'],
            [['id_gt_p_riesgos'], 'exist', 'skipOnError' => true, 'targetClass' => priesgos::className(), 'targetAttribute' => ['id_gt_p_riesgos' => 'id']],
            [['id_gt_t_embarazo'], 'exist', 'skipOnError' => true, 'targetClass' => tembarazo::className(), 'targetAttribute' => ['id_gt_t_embarazo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'riesgo' => 'Riesgo',
            'id_gt_t_embarazo' => 'Embarazo',
            'id_gt_p_riesgos' => 'Riesgos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtPRiesgos()
    {
        return $this->hasOne(priesgos::className(), ['id' => 'id_gt_p_riesgos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtTEmbarazo()
    {
        return $this->hasOne(tembarazo::className(), ['id' => 'id_gt_t_embarazo']);
    }
}
