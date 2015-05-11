<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schuelers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schueler-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Schueler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            's_schuelernummer',
            's_religionsbekenntnis',
            's_istklassensprecher',
            'p_nachname',
            'p_vorname',
            // 'p_geburtsdatum',
            // 'k_name',
            // 'Eltern_e_id',
            // 'Schuelercol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
