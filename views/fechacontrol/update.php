<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrol */

$this->title = 'Actualizar fecha de control: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fechas Control', 'url' => ['index', 'id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_gt_t_embarazo' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tfechacontrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
