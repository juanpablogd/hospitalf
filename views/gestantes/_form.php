<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\pingresos;
use app\models\ptipovivienda;
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

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha_nacimiento',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

    <?= $form->field($model, 'zona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_partos')->textInput() ?>

    <?= $form->field($model, 'no_abortos')->textInput() ?>

    <?= $form->field($model, 'no_partos_pretermino')->textInput() ?>

<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'id_gt_p_ingresos')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(pingresos::find()->orderBy(['ingresos'=>SORT_ASC])->all(),'id','ingresos'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione un rango de Ingreso ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); 
?>

<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'id_gt_p_tipo_vivienda')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(ptipovivienda::find()->orderBy(['tipo_vivienda'=>SORT_ASC])->all(),'id','tipo_vivienda'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione un tipo de Vivienda ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); 
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
