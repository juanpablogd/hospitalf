<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */

$this->title = 'Crear Rangos de control';
$this->params['breadcrumbs'][] = ['label' => 'Rangos de control', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prangoscontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
