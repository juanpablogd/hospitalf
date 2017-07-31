<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\prangoscontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rangos de control';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prangoscontrol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear rango de control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'frecuencia_dias',
            'semana_min',
            'semana_max',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
