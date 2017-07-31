<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcie10-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_cie10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_gt_p_estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
