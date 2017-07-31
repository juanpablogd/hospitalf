<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tfechacontrol */

$this->title = 'Create Tfechacontrol';
$this->params['breadcrumbs'][] = ['label' => 'Tfechacontrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tfechacontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
