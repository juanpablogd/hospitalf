<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\priesgos */

$this->title = 'Create Priesgos';
$this->params['breadcrumbs'][] = ['label' => 'Priesgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priesgos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
