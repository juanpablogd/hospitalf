<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tgestantes */

$this->title = 'Update Tgestantes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tgestantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tgestantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
