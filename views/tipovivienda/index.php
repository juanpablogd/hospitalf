<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ptipoviviendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ptipoviviendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ptipovivienda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ptipovivienda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo_vivienda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
