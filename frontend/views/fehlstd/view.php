<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fehlstunde */

$this->title = $model->fs_datum;
$this->params['breadcrumbs'][] = ['label' => 'Fehlstundes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fehlstunde-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fs_datum], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fs_datum], [
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
            'fs_datum',
            'fs_grund',
            's_schuelernummer',
            'Unterrichtsfach_uf_bezeichnung',
        ],
    ]) ?>

</div>
