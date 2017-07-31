<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospitalfaca.gt_t_ubicacion".
 *
 * @property integer $id
 * @property string $documento
 * @property double $x
 * @property double $y
 * @property string $fecha
 * @property integer $id_gt_t_gestantes
 *
 * @property HospitalfacaGtTGestantes $idGtTGestantes
 */
class tubicacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospitalfaca.gt_t_ubicacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documento'], 'string'],
            [['x', 'y'], 'number'],
            [['fecha'], 'safe'],
            [['id_gt_t_gestantes'], 'integer'],
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
            'documento' => 'Documento',
            'x' => 'X',
            'y' => 'Y',
            'fecha' => 'Fecha',
            'id_gt_t_gestantes' => 'Id Gt T Gestantes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtTGestantes()
    {
        return $this->hasOne(tgestantes::className(), ['id' => 'id_gt_t_gestantes']);
    }
}
