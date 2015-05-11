<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Klasse */

$this->title = $model->k_name;
$this->params['breadcrumbs'][] = ['label' => 'Klasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klasse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->k_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->k_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'k_name',
            'k_jahrgang',
            'k_abschlussjahr',
            'k_schueleranzahl',
            'k_abt_bezeichnung',
            'k_semester',
            'Schulform_schf_id',
        ],
    ]) ?>

</div>
