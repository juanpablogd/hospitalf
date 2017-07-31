<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tembarazoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tembarazos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tembarazo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tembarazo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_ultima_regla',
            'no_control_prenatal',
            'fecha_control_prenatal',
            'edad_gesta_inicio_semana',
            // 'imc',
            // 'fecha_parto',
            // 'id_gt_t_gestantes',
            // 'tension_arterial:ntext',
            // 'id_gt_p_estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
