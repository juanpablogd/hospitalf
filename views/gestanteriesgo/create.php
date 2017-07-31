<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\psgestanteriesgo */

$this->title = 'Create Psgestanteriesgo';
$this->params['breadcrumbs'][] = ['label' => 'Psgestanteriesgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psgestanteriesgo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
