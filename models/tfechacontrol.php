<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_t_fecha_control".
 *
 * @property integer $id
 * @property string $documento
 * @property string $fecha
 * @property integer $numero
 * @property integer $id_gt_t_embarazo
 *
 * @property GestantesGtTEmbarazo $idGtTEmbarazo
 */
class tfechacontrol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_t_fecha_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documento', 'fecha'], 'required'],
            [['fecha'], 'safe'],
            [['numero', 'id_gt_t_embarazo'], 'integer'],
            [['documento'], 'string', 'max' => 30],
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
            'documento' => 'Documento',
            'fecha' => 'Fecha',
            'numero' => 'Numero',
            'id_gt_t_embarazo' => 'Id Gt T Embarazo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtTEmbarazo()
    {
        return $this->hasOne(tembarazo::className(), ['id' => 'id_gt_t_embarazo']);
    }
}
