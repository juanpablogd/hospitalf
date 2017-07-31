<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pingresos */

$this->title = 'Create Pingresos';
$this->params['breadcrumbs'][] = ['label' => 'Pingresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pingresos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
