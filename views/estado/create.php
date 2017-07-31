<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pestado */

$this->title = 'Create Pestado';
$this->params['breadcrumbs'][] = ['label' => 'Pestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pestado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
