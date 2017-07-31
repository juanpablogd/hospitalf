<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tembarazo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Embarazos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tembarazo-view">

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
            'fecha_ultima_regla',
            'no_control_prenatal',
            'fecha_control_prenatal',
            'edad_gesta_inicio_semana',
            'imc',
            'fecha_parto',
            'id_gt_t_gestantes',
            'tension_arterial:ntext',
            'id_gt_p_estado',
        ],
    ]) ?>

</div>
