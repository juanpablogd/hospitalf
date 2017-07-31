<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */

$this->title = 'Create Pcie10';
$this->params['breadcrumbs'][] = ['label' => 'Pcie10s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcie10-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
