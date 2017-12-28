<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\EventSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'tittle') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'id_location') ?>

		<?= $form->field($model, 'image') ?>

		<?php // echo $form->field($model, 'id_publisher') ?>

		<?php // echo $form->field($model, 'alamat') ?>

		<?php // echo $form->field($model, 'id_kategori') ?>

		<?php // echo $form->field($model, 'flag') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
