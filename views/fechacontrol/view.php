<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrol */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fechas de control', 'url' => ['index','id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tfechacontrol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id, 'id_gt_t_embarazo'=>$_GET['id_gt_t_embarazo']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id, 'id_gt_t_embarazo'=>$_GET['id_gt_t_embarazo']], [
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
            'documento',
            'fecha',
            'numero',
            'id_gt_t_embarazo',
        ],
    ]) ?>

</div>
