<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riesgos de gestante', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-view">

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
            'riesgo:boolean',
            'id_gt_t_embarazo',
            'id_gt_p_riesgos',
        ],
    ]) ?>

</div>
