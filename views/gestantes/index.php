<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tgestantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgestantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear gestante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'documento:ntext',
            'nombre:ntext',
            'apellido:ntext',
            'numero_ocupantes',
            // 'eps:ntext',
            // 'fecha_nacimiento',
            // 'zona:ntext',
            // 'direccion:ntext',
            // 'no_partos',
            // 'no_abortos',
            // 'no_partos_pretermino',
            // 'id_gt_p_ingresos',
            // 'id_gt_p_tipo_vivienda',
            // 'telefono_1:ntext',
            // 'telefono_2:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
