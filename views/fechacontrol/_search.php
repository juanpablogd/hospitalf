<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tfechacontrol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'documento') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'id_gt_t_embarazo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
