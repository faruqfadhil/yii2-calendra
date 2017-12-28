<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var frontend\models\EventSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id_event') ?>

		<?= $form->field($model, 'title') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'id_location') ?>

		<?= $form->field($model, 'id_timeline') ?>

		<?php // echo $form->field($model, 'poster_path') ?>

		<?php // echo $form->field($model, 'id_publisher') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
