<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrol */

$this->title = 'Crear Fecha de control';
$this->params['breadcrumbs'][] = ['label' => 'Fechas de control', 'url' => ['index', 'id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tfechacontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
