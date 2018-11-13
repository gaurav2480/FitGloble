<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\customersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'Customer_ID',
            'Receipt_No',
            //'Date',
            'Customer_Name',
            //'Date_Of_Birth',
            //'Age',
            //'Address',
            'Mobile_Number',
            //'Alternate_Number',
            'Batch_Timing',
            //'Locker_No',
            //'Fitness_Goals',
            //'Medical_Conditions',
            //'Created_Date',
            //'Expiry_Date',
             'Employment_Status',
            //'Status',
            //'User_ID',
             //'Gender',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
