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
            'documento',
            'nombre',
            'apellido',
            'telefono_1',
            // 'telefono_2',
            // 'numero_ocupantes',
            // 'eps',
            // 'fecha_nacimiento',
            // 'zona',
            // 'direccion',
            // 'no_partos',
            // 'no_abortos',
            // 'no_partos_pretermino',
            // 'id_gt_p_ingresos',
            // 'id_gt_p_tipo_vivienda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
