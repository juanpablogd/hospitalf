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
            'documento',
            'nombre',
            'apellido',
            'telefono_1',
            'telefono_2',
            'numero_ocupantes',
            'eps',
            'fecha_nacimiento',
            'zona',
            'direccion',
            'no_partos',
            'no_abortos',
            'no_partos_pretermino',
            'id_gt_p_ingresos',
            'id_gt_p_tipo_vivienda',
        ],
    ]) ?>

</div>
