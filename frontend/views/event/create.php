<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var frontend\models\Event $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud event-create">

    <h1>
        <?= Yii::t('models', 'Event') ?>
        <small>
                        <?= $model->title ?>
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
