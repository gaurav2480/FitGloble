<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\fitnessGoals */

$this->title = 'Create Fitness Goals';
$this->params['breadcrumbs'][] = ['label' => 'Fitness Goals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fitness-goals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
