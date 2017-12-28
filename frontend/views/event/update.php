<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var frontend\models\Event $model
*/
    
$this->title = Yii::t('models', 'Event') . " " . $model->title . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Event'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->title, 'url' => ['view', 'id_event' => $model->id_event]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud event-update">

    <h1>
        <?= Yii::t('models', 'Event') ?>
        <small>
                        <?= $model->title ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id_event' => $model->id_event], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
