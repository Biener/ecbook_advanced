<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Klasse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klasse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'k_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'k_jahrgang')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'k_abschlussjahr')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'k_schueleranzahl')->textInput() ?>

    <?= $form->field($model, 'k_abt_bezeichnung')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'k_semester')->textInput() ?>

    <?= $form->field($model, 'Schulform_schf_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
