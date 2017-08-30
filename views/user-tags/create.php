<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserTags */

$this->title = 'Create User Tags';
$this->params['breadcrumbs'][] = ['label' => 'User Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-tags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
