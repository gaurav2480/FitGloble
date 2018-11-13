<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\fitnessGoals */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Fitness Goals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fitness-goals-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'goals',
            'status',
            'activeDate',
            'inactveDate',
        ],
    ]) ?>

</div>
