<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\prangoscontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prangoscontrols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prangoscontrol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prangoscontrol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'frecuencia_dias',
            'semana_min',
            'semana_max',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
