<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use app\models\batch;
use app\models\Fitnessgoals;



/* @var $this yii\web\View */
/* @var $model app\models\customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>
<div class="row">
    
<div class="col-md-4">
    <?= $form->field($model, 'Receipt_No')->textInput(['maxlength' => true]) ?>

</div>

<div class="col-md-4">
  <?= $form->field($model, 'Date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
      //  'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-mm-yyyy'
        ]
]);?>

</div>

<div class="col-md-4">
   <?= $form->field($model, 'Customer_Name')->textInput(['maxlength' => true]) ?>

</div>

</div>

<div class="row">
    <div class="col-md-4">
   
     <?= $form->field($model, 'Date_Of_Birth')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
      //  'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-mm-yyyy'
        ]
]);?>
</div>

  <div class="col-md-4">
     <?= $form->field($model, 'Age')->textInput(['maxlength' => true]) ?>
</div>

  <div class="col-md-4">
    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
    <div class="col-md-4">
    <?= $form->field($model, 'Mobile_Number')->textInput(['maxlength' => true]) ?>
</div>

  <div class="col-md-4">
     <?= $form->field($model, 'Alternate_Number')->textInput(['maxlength' => true]) ?>
</div>

  <div class="col-md-4">
    <?= $form->field($model, 'Batch_Timing')->dropDownList(
     ArrayHelper::map(Batch::find()->where(['status' => 'Active'])->all(),'batch','batch'),
     ['prompt'=>'Select an Option']
    ) ?>

</div>
</div>


<div class="row">
    <div class="col-md-4">
   <?= $form->field($model, 'Locker_No')->textInput(['maxlength' => true]) ?>

</div>

 <div class="col-md-4">
   <?= $form->field($model, 'Employment_Status')->dropDownList(['STUDENT' => 'STUDENT', 'PUBLIC' => 'PUBLIC'],['prompt'=>'Select an Option']);     ?>

</div>
 
  <div class="col-md-4">
     <?= $form->field($model, 'Medical_Conditions')->textInput(['maxlength' => true]) ?>
</div>
</div>

<div class="row">
    <div class="col-md-4">
  <?= $form->field($model, 'Fitness_Goals')->dropDownList(
     ArrayHelper::map(Fitnessgoals::find()->where(['status'=>'Active'])->all(),'goals','goals'),
     ['prompt'=>'Select an Option']) ?>
 </div>


      <div class="col-md-4">
  <?= $form->field($model, 'Gender')->dropDownList(['MALE'=>'MALE','FEMALE'=>'FEMALE'],
     ['prompt'=>'Select an Option']) ?>
</div>

<div class="col-md-4">
<?= $form->field($model, 'User_ID')->textInput() ?>
    </div>

</div>

<div class="row">
     <div class="col-md-4">
         <?= $form->field($model, 'Image_Path')->fileInput() ?>

     </div>
    </div>

    

     <?= $form->field($model, 'Expiry_Date')->hiddenInput(['value'=>''])->label(false); ?>
    <?= $form->field($model, 'Status')->hiddenInput(['value'=>'Active'])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
