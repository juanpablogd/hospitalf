<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tgestantes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gestantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgestantes-view">

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
            'documento:ntext',
            'nombre:ntext',
            'apellido:ntext',
            'numero_ocupantes',
            'eps:ntext',
            'fecha_nacimiento',
            'zona:ntext',
            'direccion:ntext',
            'no_partos',
            'no_abortos',
            'no_partos_pretermino',
            'id_gt_p_ingresos',
            'id_gt_p_tipo_vivienda',
            'telefono_1:ntext',
            'telefono_2:ntext',
        ],
    ]) ?>

</div>
