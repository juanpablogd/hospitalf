<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rangos de control', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prangoscontrol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'frecuencia_dias',
            'semana_min',
            'semana_max',
        ],
    ]) ?>

</div>
