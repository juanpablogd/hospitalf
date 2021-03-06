<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tembarazoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tembarazo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'documento') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fecha_ultima_regla') ?>

    <?php  echo $form->field($model, 'no_control_prenatal') ?>

    <?php // echo $form->field($model, 'tension_arterial') ?>

    <?php // echo $form->field($model, 'fecha_parto') ?>

    <?php // echo $form->field($model, 'id_gt_p_estado') ?>

    <?php // echo $form->field($model, 'id_gt_t_gestantes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
