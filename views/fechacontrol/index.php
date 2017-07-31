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
        <?= Html::a('Crear Fecha de control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'documento',
            'fecha',
            'numero',
            'id_gt_t_embarazo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
