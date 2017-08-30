<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TourTags */

$this->title = 'Create Tour Tags';
$this->params['breadcrumbs'][] = ['label' => 'Tour Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-tags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
