<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ptipovivienda */

$this->title = 'Crear Tipo de vivienda';
$this->params['breadcrumbs'][] = ['label' => 'Tipo viviendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ptipovivienda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
