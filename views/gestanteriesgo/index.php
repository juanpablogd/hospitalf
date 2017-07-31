<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\psgestanteriesgoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Psgestanteriesgos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Psgestanteriesgo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'riesgo:boolean',
            'id_gt_t_embarazo',
            'id_gt_p_riesgos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
