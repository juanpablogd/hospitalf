<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Administrador de información';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="vertical-menu">
        	<a href="index.php?r=embarazo/index">Embarazo</a>
			<a href="index.php?r=gestantes/index">Gestantes</a>
			<a href="index.php?r=riesgos/index">Riesgos</a>
			<a href="index.php?r=estado/index">Estado</a>
			<a href="index.php?r=cie10/index">Cie10</a>
			<a href="index.php?r=ingresos/index">Ingresos</a>
			<a href="index.php?r=tipovivienda/index">Tipo de Vivienda</a>
			
		</div>
    </p>

</div>
