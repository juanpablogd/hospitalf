<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tubicacion */

$this->title = 'Create Tubicacion';
$this->params['breadcrumbs'][] = ['label' => 'Tubicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tubicacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
