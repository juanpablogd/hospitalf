<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */

$this->title = 'Actualizar Cie10: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cie10', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="pcie10-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
