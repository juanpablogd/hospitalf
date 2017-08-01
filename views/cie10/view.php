<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */

$this->title = $model->cod_cie10;
$this->params['breadcrumbs'][] = ['label' => 'Cie10', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcie10-view">

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
            'cod_cie10',
            'id_gt_p_estado',
        ],
    ]) ?>

</div>
