<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schueler */

$this->title = 'Update Schueler: ' . ' ' . $model->s_schuelernummer;
$this->params['breadcrumbs'][] = ['label' => 'Schuelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->s_schuelernummer, 'url' => ['view', 'id' => $model->s_schuelernummer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schueler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
