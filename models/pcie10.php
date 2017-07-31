<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_cie10".
 *
 * @property integer $id
 * @property string $cod_cie10
 * @property integer $id_gt_p_estado
 *
 * @property GestantesGtPEstado $idGtPEstado
 */
class pcie10 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_cie10';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_cie10'], 'required'],
            [['id_gt_p_estado'], 'integer'],
            [['cod_cie10'], 'string', 'max' => 255],
            [['id_gt_p_estado'], 'exist', 'skipOnError' => true, 'targetClass' => pestado::className(), 'targetAttribute' => ['id_gt_p_estado' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cod_cie10' => 'Cod Cie10',
            'id_gt_p_estado' => 'Id Gt P Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGtPEstado()
    {
        return $this->hasOne(pestado::className(), ['id' => 'id_gt_p_estado']);
    }
}
