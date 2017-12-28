<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Ticket $model
*/
    
$this->title = Yii::t('models', 'Ticket') . " " . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Ticket'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id_ticket' => $model->id_ticket]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud ticket-update">

    <h1>
        <?= Yii::t('models', 'Ticket') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id_ticket' => $model->id_ticket], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
