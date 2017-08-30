<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TourRatings */

$this->title = 'Create Tour Ratings';
$this->params['breadcrumbs'][] = ['label' => 'Tour Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-ratings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
