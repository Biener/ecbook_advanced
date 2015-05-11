<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fehlstunde */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fehlstunde-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fs_datum')->textInput() ?>

    <?= $form->field($model, 'fs_grund')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 's_schuelernummer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
