<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Klasses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klasse-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Klasse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'k_name',
            'k_jahrgang',
            'k_abschlussjahr',
            'k_schueleranzahl',
            'k_abt_bezeichnung',
            // 'k_semester',
            // 'Schulform_schf_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
