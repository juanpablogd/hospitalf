<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospitalfaca.gt_t_embarazo".
 *
 * @property integer $id
 * @property string $fecha_ultima_regla
 * @property integer $no_control_prenatal
 * @property string $fecha_control_prenatal
 * @property integer $edad_gesta_inicio_semana
 * @property string $imc
 * @property string $fecha_parto
 * @property integer $id_gt_t_gestantes
 * @property string $tension_arterial
 * @property integer $id_gt_p_estado
 *
 * @property HospitalfacaGtPasoGestanteRiesgo[] $hospitalfacaGtPasoGestanteRiesgos
 * @property HospitalfacaGtPEstado $idGtPEstado
 * @property HospitalfacaGtTGestantes $idGtTGestantes
 * @property HospitalfacaGtTFechaControl[] $hospitalfacaGtTFechaControls
 */
class tembarazo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospitalfaca.gt_t_embarazo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_ultima_regla', 'fecha_control_prenatal', 'fecha_parto'], 'safe'],
            [['no_control_prenatal', 'edad_gesta_inicio_semana', 'id_gt_t_gestantes', 'id_gt_p_estado'], 'integer'],
            [['imc'], 'number'],
            [['tension_arterial'], 'string'],
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
            'fecha_ultima_regla' => 'Fecha Ultima Regla',
            'no_control_prenatal' => 'No Control Prenatal',
            'fecha_control_prenatal' => 'Fecha Control Prenatal',
            'edad_gesta_inicio_semana' => 'Edad Gesta Inicio Semana',
            'imc' => 'Imc',
            'fecha_parto' => 'Fecha Parto',
            'id_gt_t_gestantes' => 'Id Gt T Gestantes',
            'tension_arterial' => 'Tension Arterial',
            'id_gt_p_estado' => 'Id Gt P Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHospitalfacaGtPasoGestanteRiesgos()
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
    public function getHospitalfacaGtTFechaControls()
    {
        return $this->hasMany(tfechacontrol::className(), ['id_gt_t_embarazo' => 'id']);
    }
}
