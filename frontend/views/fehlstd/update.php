<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fehlstunde */

$this->title = 'Update Fehlstunde: ' . ' ' . $model->fs_datum;
$this->params['breadcrumbs'][] = ['label' => 'Fehlstundes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fs_datum, 'url' => ['view', 'id' => $model->fs_datum]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fehlstunde-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
