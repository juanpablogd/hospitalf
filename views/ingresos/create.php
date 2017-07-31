<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pingresos */

$this->title = 'Crear Ingresos';
$this->params['breadcrumbs'][] = ['label' => 'Ingresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pingresos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
