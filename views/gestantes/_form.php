<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tgestantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tgestantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_1')->textInput() ?>

    <?= $form->field($model, 'telefono_2')->textInput() ?>

    <?= $form->field($model, 'numero_ocupantes')->textInput() ?>

    <?= $form->field($model, 'eps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput() ?>

    <?= $form->field($model, 'zona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_partos')->textInput() ?>

    <?= $form->field($model, 'no_abortos')->textInput() ?>

    <?= $form->field($model, 'no_partos_pretermino')->textInput() ?>

    <?= $form->field($model, 'id_gt_p_ingresos')->textInput() ?>

    <?= $form->field($model, 'id_gt_p_tipo_vivienda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
