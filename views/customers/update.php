<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\customers */

$this->title = 'Update Customers: ' . $model->Customer_Name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Customer_ID, 'url' => ['view', 'id' => $model->Customer_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
