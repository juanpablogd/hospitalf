<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */

$this->title = 'Actualizar riesgo gestante: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riesgos gestante', 'url' => ['index', 'id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_gt_t_embarazo' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="psgestanteriesgo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
