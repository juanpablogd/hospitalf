<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospitalfaca.gt_t_foto".
 *
 * @property integer $id
 * @property string $url
 * @property integer $id_gt_t_gestantes
 *
 * @property HospitalfacaGtTGestantes $idGtTGestantes
 */
class tfoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospitalfaca.gt_t_foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'string'],
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
            'url' => 'Url',
            'id_gt_t_gestantes' => 'Gestantes',
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
