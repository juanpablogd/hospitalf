<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tgestantes */

$this->title = 'Create Tgestantes';
$this->params['breadcrumbs'][] = ['label' => 'Tgestantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgestantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
