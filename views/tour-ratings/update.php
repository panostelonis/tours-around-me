<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TourRatings */

$this->title = 'Update Tour Ratings: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tour Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour-ratings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
