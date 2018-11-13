<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\fitnessGoals */

$this->title = 'Update Fitness Goals: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Fitness Goals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fitness-goals-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
