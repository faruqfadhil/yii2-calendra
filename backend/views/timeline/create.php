<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Timeline $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' =>  'Timelines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud timeline-create">


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
    'id_event' => $id_event,
    ]); ?>

</div>
