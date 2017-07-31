<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tubicacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tubicacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tubicacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tubicacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'documento:ntext',
            'x',
            'y',
            'fecha',
            // 'id_gt_t_gestantes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
