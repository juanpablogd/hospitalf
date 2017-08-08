<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\pestado;
use app\models\tgestantes;
/* @var $this yii\web\View */
/* @var $model app\models\tembarazo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tembarazo-form">

    <?php $form = ActiveForm::begin(); ?>
    
<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_gt_t_gestantes')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(tgestantes::find()->orderBy(['documento'=>SORT_ASC])->all(),'id','fullNombre'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione una gestante ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha_ultima_regla',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

    <?= $form->field($model, 'no_control_prenatal')->textInput() ?>

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha_control_prenatal',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

    <?= $form->field($model, 'edad_gesta_inicio_semana')->textInput() ?>

    <?= $form->field($model, 'imc')->textInput() ?>

    <?= $form->field($model, 'tension_arterial')->textInput(['maxlength' => true]) ?>

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha_parto',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'id_gt_p_estado')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(pestado::find()->orderBy(['id'=>SORT_ASC])->all(),'id','fullEstado'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione un Estado ...'],
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
