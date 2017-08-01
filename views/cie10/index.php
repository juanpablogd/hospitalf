<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\pcie10Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cie 10';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcie10-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cie 10', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'cod_cie10',
            [
                'label' => 'Estado',
                'format' => 'ntext',
                'attribute'=>'id_gt_p_estado',
                'value' => function($model) {
                    return $model->idGtPEstado['estado'];
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
