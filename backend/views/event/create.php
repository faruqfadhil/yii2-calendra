<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Event $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' =>  'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud event-create">

    <h1>
        <small>
                        <?= $model->id ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
