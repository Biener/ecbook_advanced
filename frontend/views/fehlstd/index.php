<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fehlstundes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fehlstunde-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fehlstunde', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fs_datum',
            'fs_grund',
            's_schuelernummer',
            'Unterrichtsfach_uf_bezeichnung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
