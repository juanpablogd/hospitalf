<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\prangoscontrol */

$this->title = 'Create Prangoscontrol';
$this->params['breadcrumbs'][] = ['label' => 'Prangoscontrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prangoscontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
