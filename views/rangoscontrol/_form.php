<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prangoscontrol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'frecuencia_dias')->textInput() ?>

    <?= $form->field($model, 'semana_min')->textInput() ?>

    <?= $form->field($model, 'semana_max')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
