<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Timeline $model
*/
    
$this->title = Yii::t('models', 'Timeline') . " " . $model->id_timeline . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Timeline'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_timeline, 'url' => ['view', 'id_timeline' => $model->id_timeline]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud timeline-update">

    <h1>
        <?= Yii::t('models', 'Timeline') ?>
        <small>
                        <?= $model->id_timeline ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id_timeline' => $model->id_timeline], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
