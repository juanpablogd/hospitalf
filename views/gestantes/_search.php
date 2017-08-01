<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tgestantesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tgestantes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'documento') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'telefono_1') ?>

    <?php // echo $form->field($model, 'telefono_2') ?>

    <?php // echo $form->field($model, 'numero_ocupantes') ?>

    <?php // echo $form->field($model, 'eps') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'zona') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'no_partos') ?>

    <?php // echo $form->field($model, 'no_abortos') ?>

    <?php // echo $form->field($model, 'no_partos_pretermino') ?>

    <?php // echo $form->field($model, 'id_gt_p_ingresos') ?>

    <?php // echo $form->field($model, 'id_gt_p_tipo_vivienda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
