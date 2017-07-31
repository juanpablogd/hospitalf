<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pcie10 */

$this->title = 'Crear Cie 10';
$this->params['breadcrumbs'][] = ['label' => 'Cie 10', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcie10-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
