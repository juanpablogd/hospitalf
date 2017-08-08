<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\tgestantes;

/* @var $this yii\web\View */
/* @var $model app\models\tubicacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tubicacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x')->textInput() ?>

    <?= $form->field($model, 'y')->textInput() ?>

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
