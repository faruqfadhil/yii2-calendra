<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\TimelineSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="timeline-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id_timeline') ?>

		<?= $form->field($model, 'id_event') ?>

		<?= $form->field($model, 'timeline_name') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'timeline_category') ?>

		<?php // echo $form->field($model, 'held_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
