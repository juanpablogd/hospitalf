<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tubicacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ubicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tubicacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear ubicación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'documento',
            'x',
            'y',
            'fecha',
            // 'id_gt_t_gestantes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
