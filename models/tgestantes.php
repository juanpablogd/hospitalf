<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_t_gestantes".
 *
 * @property integer $id
 * @property string $documento
 * @property string $nombre
 * @property string $apellido
 * @property integer $telefono_1
 * @property integer $telefono_2
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
 *
 * @property GestantesGtTEmbarazo[] $gestantesGtTEmbarazos
 * @property GestantesGtTFoto[] $gestantesGtTFotos
 * @property GestantesGtPIngresos $idGtPIngresos
 * @property GestantesGtPTipoVivienda $idGtPTipoVivienda
 * @property GestantesGtTUbicacion[] $gestantesGtTUbicacions
 */
class tgestantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_t_gestantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documento', 'nombre', 'apellido', 'telefono_1', 'numero_ocupantes', 'fecha_nacimiento', 'zona', 'direccion', 'id_gt_p_ingresos', 'id_gt_p_tipo_vivienda'], 'required'],
            [['telefono_1', 'telefono_2', 'numero_ocupantes', 'no_partos', 'no_abortos', 'no_partos_pretermino', 'id_gt_p_ingresos', 'id_gt_p_tipo_vivienda'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['documento'], 'string', 'max' => 30],
            [['nombre', 'apellido', 'eps', 'zona', 'direccion'], 'string', 'max' => 255],
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
            'telefono_1' => 'Teléfono 1',
            'telefono_2' => 'Teléfono 2',
            'numero_ocupantes' => 'Número Ocupantes',
            'eps' => 'Eps',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'zona' => 'Zona',
            'direccion' => 'Dirección',
            'no_partos' => 'Num. Partos',
            'no_abortos' => 'Num. Abortos',
            'no_partos_pretermino' => 'Num. Partos Pretermino',
            'id_gt_p_ingresos' => 'Ingresos',
            'id_gt_p_tipo_vivienda' => 'Tipo Vivienda',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTEmbarazos()
    {
        return $this->hasMany(tembarazo::className(), ['id_gt_t_gestantes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTFotos()
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
    public function getGestantesGtTUbicacions()
    {
        return $this->hasMany(tubicacion::className(), ['id_gt_t_gestantes' => 'id']);
    }
}
