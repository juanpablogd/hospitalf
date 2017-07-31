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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fecha_ultima_regla') ?>

    <?= $form->field($model, 'no_control_prenatal') ?>

    <?= $form->field($model, 'fecha_control_prenatal') ?>

    <?= $form->field($model, 'edad_gesta_inicio_semana') ?>

    <?php // echo $form->field($model, 'imc') ?>

    <?php // echo $form->field($model, 'fecha_parto') ?>

    <?php // echo $form->field($model, 'id_gt_t_gestantes') ?>

    <?php // echo $form->field($model, 'tension_arterial') ?>

    <?php // echo $form->field($model, 'id_gt_p_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
