<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\psgestanteriesgoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riesgos gestante';
$this->params['breadcrumbs'][] = ['label' => 'Gestantes', 'url' => ['embarazo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear riesgo gestante', ['create', 'id_gt_t_embarazo' => $_GET['id']], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'label' => 'F. última regla',
                'format' => 'ntext',
                'attribute'=>'fecha_ultima_regla',
                'value' => function($model) {
                    return $model->idGtTEmbarazo['fecha_ultima_regla'];
                },
            ],
            [
                'label' => 'Documento',
                'format' => 'ntext',
                'attribute'=>'document0',
                'value' => function($model) {
                    return $model->idGtTEmbarazo->idGtTGestantes->documento;
                },
            ],
            [
                'label' => 'Nombre',
                'format' => 'ntext',
                'attribute'=>'nombre',
                'value' => function($model) {
                    return $model->idGtTEmbarazo->idGtTGestantes->nombre;
                },
            ],
            'riesgo:boolean',
            [
                'label' => 'Tipo',
                'format' => 'ntext',
                'attribute'=>'nombre_riesgos',
                'value' => function($model) {
                    return $model->idGtPRiesgos->nombre_riesgos;
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons'  => [
                    'view' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),]);
                    }
                ],
                'buttons'  => [
                    'update' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'Update'),]);
                    }
                ],
                'buttons'  => [
                    'delete' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id'], 'id_gt_t_embarazo' => $_GET['id']], [
                                    'title' => 'Borrar', 'data-confirm' => Yii::t('app', 'Desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {
                    if ($action === 'view') {
                            $url = 'index.php?r=gestanteriesgo/view&id='.$searchModel['id'].'&id_gt_t_embarazo='.$_GET['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=gestanteriesgo/update&id='.$searchModel['id'].'&id_gt_t_embarazo='.$_GET['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
