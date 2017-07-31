<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tfotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tfotos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tfoto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tfoto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:ntext',
            'id_gt_t_gestantes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
