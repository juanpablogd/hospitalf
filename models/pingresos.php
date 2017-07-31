<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gestantes.gt_p_ingresos".
 *
 * @property integer $id
 * @property string $ingresos
 *
 * @property GestantesGtTGestantes[] $gestantesGtTGestantes
 */
class pingresos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestantes.gt_p_ingresos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ingresos'], 'required'],
            [['ingresos'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ingresos' => 'Ingresos',
        ];
    }

    /** 
     * @return \yii\db\ActiveQuery
     */
    public function getGestantesGtTGestantes()
    {
        return $this->hasMany(tgestantes::className(), ['id_gt_p_ingresos' => 'id']);
    }
}
