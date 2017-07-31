<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\priesgos */

$this->title = 'Actualizar riesgo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riesgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="priesgos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
