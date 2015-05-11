<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Klasse */

$this->title = 'Update Klasse: ' . ' ' . $model->k_name;
$this->params['breadcrumbs'][] = ['label' => 'Klasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->k_name, 'url' => ['view', 'id' => $model->k_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klasse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
