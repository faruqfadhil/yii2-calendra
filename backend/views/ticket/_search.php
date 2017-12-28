<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\TicketSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="ticket-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id_ticket') ?>

		<?= $form->field($model, 'id_event') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'price') ?>

		<?php // echo $form->field($model, 'jumlah') ?>

		<?php // echo $form->field($model, 'kategori') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
