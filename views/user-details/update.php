<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserDetails */

$this->title = 'Update User Details: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->User_ID, 'url' => ['view', 'id' => $model->User_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
