<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psgestanteriesgo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'riesgo')->checkbox() ?>

    <?= $form->field($model, 'id_gt_t_embarazo') ?>

    <?= $form->field($model, 'id_gt_p_riesgos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
