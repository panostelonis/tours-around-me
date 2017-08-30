<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuideRatings */

$this->title = 'Create Guide Ratings';
$this->params['breadcrumbs'][] = ['label' => 'Guide Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guide-ratings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
