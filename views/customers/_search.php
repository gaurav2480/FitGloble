<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\customersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Customer_ID') ?>

    <?= $form->field($model, 'Receipt_No') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Customer_Name') ?>

    <?= $form->field($model, 'Date_Of_Birth') ?>

    <?php // echo $form->field($model, 'Age') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Mobile_Number') ?>

    <?php // echo $form->field($model, 'Alternate_Number') ?>

    <?php // echo $form->field($model, 'Batch_Timing') ?>

    <?php // echo $form->field($model, 'Locker_No') ?>

    <?php // echo $form->field($model, 'Fitness_Goals') ?>

    <?php // echo $form->field($model, 'Medical_Conditions') ?>

    <?php // echo $form->field($model, 'Created_Date') ?>

    <?php // echo $form->field($model, 'Expiry_Date') ?>

    <?php // echo $form->field($model, 'Employment_Status') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'User_ID') ?>

<?php // echo $form->field($model, 'Gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
