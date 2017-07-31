<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tgestantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tgestantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documento')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'numero_ocupantes')->textInput() ?>

    <?= $form->field($model, 'eps')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput() ?>

    <?= $form->field($model, 'zona')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_partos')->textInput() ?>

    <?= $form->field($model, 'no_abortos')->textInput() ?>

    <?= $form->field($model, 'no_partos_pretermino')->textInput() ?>

    <?= $form->field($model, 'id_gt_p_ingresos')->textInput() ?>

    <?= $form->field($model, 'id_gt_p_tipo_vivienda')->textInput() ?>

    <?= $form->field($model, 'telefono_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono_2')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
