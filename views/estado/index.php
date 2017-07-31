<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\pestadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pestados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pestado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pestado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'estado',
            'detalle_estado',
            'min_semana',
            'max_semana',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
