<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schueler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schueler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 's_schuelernummer')->textInput() ?>

    <?= $form->field($model, 's_religionsbekenntnis')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 's_istklassensprecher')->textInput() ?>

    <?= $form->field($model, 'p_nachname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'p_vorname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'p_geburtsdatum')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'k_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Eltern_e_id')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Schuelercol')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
