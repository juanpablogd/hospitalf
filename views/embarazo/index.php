<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\models\tembarazoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Embarazos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tembarazo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Embarazo', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'attribute' => 'estado',
                'value' => function($model) {
                    return $model->idGtPEstado['fullEstado'];
                },
            ],
            [   'attribute' => 'fecha_ultima_regla',
                'value' => 'fecha_ultima_regla',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'name' => 'fecha_ultima_regla',
                            'attribute' => 'fecha_ultima_regla',
                            'options' => ['placeholder' => 'Seleccione Fecha...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose' => true,
                            ]
                        ]),
            ],
            'no_control_prenatal',

            //'edad_gesta_inicio_semana',
            // 'imc',
            // 'fecha_parto',
            // 'id_gt_t_gestantes',
            // 'tension_arterial:ntext',
            // 'id_gt_p_estado',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {fcontrol} {gesri}',
                'buttons'  => [
                    'view' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),]);
                    }
                ],
                'buttons'  => [
                    'update' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'Update')]);
                    }
                ],
                'buttons'  => [
                    'delete' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id']], [
                                    'title' => Yii::t('app', 'Delete'), 'data-confirm' => Yii::t('app', 'Seguro que desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'buttons'  => [
                    'fcontrol' => function($url, $searchModel, $key, $index) {
                            return Html::a('<span class="glyphicon glyphicon-calendar"></span>', $url, [
                                    'title' => 'Ad. Control',])."</br>";
                    }
                ],
                'buttons'  => [
                    'gesri' => function($url) {
                            return Html::a('<span class="glyphicon glyphicon-alert"></span>', $url, [
                                    'title' => 'Ad. Riesgos',]);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {    //echo $action." ";
                    if ($action === 'view') {
                            $url = 'index.php?r=embarazo/view&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=embarazo/update&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'fcontrol') {
                            $url = 'index.php?r=fechacontrol/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'gesri') {
                            $url = 'index.php?r=gestanteriesgo/index&id='.$searchModel['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
