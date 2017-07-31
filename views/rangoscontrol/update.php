<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */

$this->title = 'Update Prangoscontrol: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prangoscontrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prangoscontrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
