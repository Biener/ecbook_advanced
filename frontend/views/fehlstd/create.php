<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Fehlstunde */

$this->title = 'Create Fehlstunde';
$this->params['breadcrumbs'][] = ['label' => 'Fehlstundes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fehlstunde-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
