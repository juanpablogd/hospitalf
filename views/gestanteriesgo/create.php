<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */

$this->title = 'Crear Riesgos Gestante';
$this->params['breadcrumbs'][] = ['label' => 'Riesgos Gestante', 'url' => ['index', 'id' => $_GET['id_gt_t_embarazo']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
