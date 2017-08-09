<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riesgos de gestante', 'url' => ['index','id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-view">

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
            'riesgo:boolean',
            'id_gt_t_embarazo',
            'id_gt_p_riesgos',
        ],
    ]) ?>

</div>
