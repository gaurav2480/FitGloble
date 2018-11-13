<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\fitnessGoals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fitness-goals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goals')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activeDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inactveDate')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
