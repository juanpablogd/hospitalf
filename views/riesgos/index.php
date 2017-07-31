<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\priesgosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riesgos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priesgos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear riesgo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'nombre_riegos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
