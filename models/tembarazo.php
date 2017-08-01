<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_t_embarazo".
 *
 * @property integer $id
 * @property string $fecha_ultima_regla
 * @property integer $no_control_prenatal
 * @property string $fecha_control_prenatal
 * @property integer $edad_gesta_inicio_semana
 * @property integer $imc
 * @property string $tension_arterial
 * @property string $fecha_parto
 * @property integer $id_gt_p_estado
 * @property integer $id_gt_t_gestantes
 *
 * @property GestantesGtPasoGestanteRiesgo[] $gestantesGtPasoGestanteRiesgos
 * @property GestantesGtPEstado $idGtPEstado
 * @property GestantesGtTGestantes $idGtTGestantes
 * @property GestantesGtTFechaControl[] $gestantesGtTFechaControls
 */
class tembarazo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_t_embarazo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_ultima_regla', 'id_gt_p_estado', 'id_gt_t_gestantes'], 'required'],
            [['fecha_ultima_regla', 'fecha_control_prenatal', 'fecha_parto'], 'safe'],
            [['no_control_prenatal', 'edad_gesta_inicio_semana', 'imc', 'id_gt_p_estado', 'id_gt_t_gestantes'], 'integer'],
            [['tension_arterial'], 'string', 'max' => 20],
            [['id_gt_p_estado'], 'unique'],
            [['id_gt_p_estado'], 'exist', 'skipOnError' => true, 'targetClass' => pestado::className(), 'targetAttribute' => ['id_gt_p_estado' => 'id']],
            [['id_gt_t_gestantes'], 'exist', 'skipOnError' => true, 'targetClass' => tgestantes::className(), 'targetAttribute' => ['id_gt_t_gestantes' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_ultima_regla' => 'Fecha última Regla',
            'no_control_prenatal' => 'Num. Control Prenatal',
            'fecha_control_prenatal' => 'Fecha Control Prenatal',
            'edad_gesta_inicio_semana' => 'Edad Gesta Inicio Semana',
            'imc' => 'Imc',
            'tension_arterial' => 'Tension Arterial',
            'fecha_parto' => 'Fecha Parto',
            'id_gt_p_estado' => 'Estado',
            'id_gt_t_gestantes' => 'Gestantes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtPasoGestanteRiesgos()
    {
        return $this->hasMany(psgestanteriesgo::className(), ['id_gt_t_embarazo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtPEstado()
    {
        return $this->hasOne(pestado::className(), ['id' => 'id_gt_p_estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtTGestantes()
    {
        return $this->hasOne(tgestantes::className(), ['id' => 'id_gt_t_gestantes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTFechaControls()
    {
        return $this->hasMany(tfechacontrol::className(), ['id_gt_t_embarazo' => 'id']);
    }
}
