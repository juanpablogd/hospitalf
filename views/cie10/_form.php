<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\pestado;
/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcie10-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_cie10')->textInput(['maxlength' => true]) ?>

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
