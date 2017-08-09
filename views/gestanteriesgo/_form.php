<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psgestanteriesgo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'riesgo')->checkbox() ?>

    <?= $form->field($model, 'id_gt_p_riesgos')->textInput() ?>

+<?php
 	echo $form->field($model, 'id_gt_t_embarazo')
			->hiddenInput(['value' => $_GET['id_gt_t_embarazo']])
			->label(false)
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
