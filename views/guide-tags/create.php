<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuideTags */

$this->title = 'Create Guide Tags';
$this->params['breadcrumbs'][] = ['label' => 'Guide Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guide-tags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
