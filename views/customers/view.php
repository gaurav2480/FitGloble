<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\customers */

$this->title = $model->Customer_Name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
             ['attribute'=>'Photo',
            'value'=> yii::getAlias('http://localhost/basic/web').'/'.$model->Image_Path,
            'format'=>['image',['width'=>'120','height'=>'120']]
            ],
            //'Customer_ID',
            'Receipt_No',
          //  'Date',
            'Customer_Name',
            'Date_Of_Birth',
            'Age',
            'Address',
            'Mobile_Number',
            'Alternate_Number',
            'Batch_Timing',
            'Locker_No',
            'Fitness_Goals',
            'Medical_Conditions',
            //'Created_Date',
            //'Expiry_Date',
            'Employment_Status',
            //'Status',
            //'User_ID',
            'Gender',
            //'Image_Path',
           
        ],
    ]) ?>

       <p>
        <?= Html::a('Update', ['update', 'id' => $model->Customer_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Customer_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
