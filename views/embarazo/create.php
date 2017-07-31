<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tembarazo */

$this->title = 'Crear Embarazo';
$this->params['breadcrumbs'][] = ['label' => 'Embarazos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tembarazo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
