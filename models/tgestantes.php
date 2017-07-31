<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospitalfaca.gt_t_gestantes".
 *
 * @property integer $id
 * @property string $documento
 * @property string $nombre
 * @property string $apellido
 * @property integer $numero_ocupantes
 * @property string $eps
 * @property string $fecha_nacimiento
 * @property string $zona
 * @property string $direccion
 * @property integer $no_partos
 * @property integer $no_abortos
 * @property integer $no_partos_pretermino
 * @property integer $id_gt_p_ingresos
 * @property integer $id_gt_p_tipo_vivienda
 * @property string $telefono_1
 * @property string $telefono_2
 *
 * @property HospitalfacaGtTEmbarazo[] $hospitalfacaGtTEmbarazos
 * @property HospitalfacaGtTFoto[] $hospitalfacaGtTFotos
 * @property HospitalfacaGtPIngresos $idGtPIngresos
 * @property HospitalfacaGtPTipoVivienda $idGtPTipoVivienda
 * @property HospitalfacaGtTUbicacion[] $hospitalfacaGtTUbicacions
 */
class tgestantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospitalfaca.gt_t_gestantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documento', 'nombre', 'apellido', 'eps', 'zona', 'direccion', 'telefono_1', 'telefono_2'], 'string'],
            [['numero_ocupantes', 'no_partos', 'no_abortos', 'no_partos_pretermino', 'id_gt_p_ingresos', 'id_gt_p_tipo_vivienda'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['id_gt_p_ingresos'], 'exist', 'skipOnError' => true, 'targetClass' => pingresos::className(), 'targetAttribute' => ['id_gt_p_ingresos' => 'id']],
            [['id_gt_p_tipo_vivienda'], 'exist', 'skipOnError' => true, 'targetClass' => ptipovivienda::className(), 'targetAttribute' => ['id_gt_p_tipo_vivienda' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'documento' => 'Documento',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'numero_ocupantes' => 'Numero Ocupantes',
            'eps' => 'Eps',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'zona' => 'Zona',
            'direccion' => 'Direccion',
            'no_partos' => 'No Partos',
            'no_abortos' => 'No Abortos',
            'no_partos_pretermino' => 'No Partos Pretermino',
            'id_gt_p_ingresos' => 'Id Gt P Ingresos',
            'id_gt_p_tipo_vivienda' => 'Id Gt P Tipo Vivienda',
            'telefono_1' => 'Telefono 1',
            'telefono_2' => 'Telefono 2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHospitalfacaGtTEmbarazos()
    {
        return $this->hasMany(tembarazo::className(), ['id_gt_t_gestantes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHospitalfacaGtTFotos()
    {
        return $this->hasMany(tfoto::className(), ['id_gt_t_gestantes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtPIngresos()
    {
        return $this->hasOne(pingresos::className(), ['id' => 'id_gt_p_ingresos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtPTipoVivienda()
    {
        return $this->hasOne(ptipovivienda::className(), ['id' => 'id_gt_p_tipo_vivienda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHospitalfacaGtTUbicacions()
    {
        return $this->hasMany(tubicacion::className(), ['id_gt_t_gestantes' => 'id']);
    }
}
