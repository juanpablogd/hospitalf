<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tembarazo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tembarazo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_ultima_regla')->textInput() ?>

    <?= $form->field($model, 'no_control_prenatal')->textInput() ?>

    <?= $form->field($model, 'fecha_control_prenatal')->textInput() ?>

    <?= $form->field($model, 'edad_gesta_inicio_semana')->textInput() ?>

    <?= $form->field($model, 'imc')->textInput() ?>

    <?= $form->field($model, 'fecha_parto')->textInput() ?>

    <?= $form->field($model, 'id_gt_t_gestantes')->textInput() ?>

    <?= $form->field($model, 'tension_arterial')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_gt_p_estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
