<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TourTagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tour Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-tags-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour Tags', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag_id',
            'tour_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
