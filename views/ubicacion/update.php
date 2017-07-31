<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tubicacion */

$this->title = 'Update Tubicacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tubicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tubicacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
