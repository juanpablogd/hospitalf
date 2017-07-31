<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ptipovivienda */

$this->title = 'Actualizar tipo de vivienda: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipos vivienda', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="ptipovivienda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
