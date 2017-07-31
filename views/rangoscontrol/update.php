<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */

$this->title = 'Actualizar rago de control: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rangos contol', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="prangoscontrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
