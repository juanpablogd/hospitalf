<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tfechacontrol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'numero')->textInput() ?>

<?php
	echo $form->field($model, 'id_gt_t_embarazo')
  		->hiddenInput(['value' => $_GET['id_gt_t_embarazo']])
  		->label(false)
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
