<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\models\tubicacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ubicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tubicacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear ubicación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'label' => 'CC',
                'format' => 'ntext',
                'attribute'=>'documento',
                'value' => function($model) {
                    return $model->idGtTGestantes['documento'];
                },
            ],
            [
                'label' => 'Nombres',
                'format' => 'ntext',
                'attribute'=>'nombre',
                'value' => function($model) {
                    return $model->idGtTGestantes['nombre'];
                },
            ],
            [
                'label' => 'Apellidos',
                'format' => 'ntext',
                'attribute'=>'apellido',
                'value' => function($model) {
                    return $model->idGtTGestantes['apellido'];
                },
            ],
            'x',
            'y',
            [   'attribute' => 'fecha',
                'value' => 'fecha',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'name' => 'fecha',
                            'attribute' => 'fecha',
                            'options' => ['placeholder' => 'Seleccione Fecha...'],
                            'form' => $form,
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose' => true,
                            ]
                        ]),
            ],
            // 'id_gt_t_gestantes',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
