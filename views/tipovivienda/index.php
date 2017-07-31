<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ptipoviviendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Tipos de vivienda";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ptipovivienda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear tipo vivienda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'tipo_vivienda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
