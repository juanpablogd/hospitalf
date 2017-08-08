<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tfechacontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fechas de control';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tfechacontrol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Fecha de control', ['create', 'id_gt_t_embarazo' => $_GET['id']], ['class' => 'btn btn-success']) ?>
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
            [
                'label' => 'Apellido',
                'format' => 'ntext',
                'attribute'=>'apellido',
                'value' => function($model) {
                    return $model->idGtTEmbarazo->idGtTGestantes->apellido;
                },
            ],
            // $model->destination->designationGroup->group_name
            'fecha',
            'numero',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons'  => [
                    'view' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('yii', 'View'),]);
                    }
                ],
                'buttons'  => [
                    'update' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('yii', 'Update'),]);
                    }
                ],
                'buttons'  => [
                    'delete' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id'], 'id_gt_t_embarazo' => $_GET['id']], [
                                    'title' => Yii::t('yii', 'Delete'), 'data-confirm' => Yii::t('yii', 'Desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {
                    if ($action === 'view') {
                            $url = 'index.php?r=fechacontrol/view&id='.$searchModel['id'].'&id_gt_t_embarazo='.$_GET['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=fechacontrol/update&id='.$searchModel['id'].'&id_gt_t_embarazo='.$_GET['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
