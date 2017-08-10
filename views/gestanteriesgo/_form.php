<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\priesgos;
/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psgestanteriesgo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'riesgo')->checkbox() ?>

<?php    // Normal select with ActiveForm & model
      echo $form->field($model, 'id_gt_p_riesgos')->widget(Select2::classname(), [
          'data' => ArrayHelper::map(priesgos::find()->orderBy(['nombre_riesgos'=>SORT_ASC])->all(),'id','nombre_riesgos'),
          'language' => 'es',
          'options' => ['placeholder' => 'Seleccione un riesgo ...'],
          'pluginOptions' => [
              'allowClear' => true
          ],
      ]); 
 ?>

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
