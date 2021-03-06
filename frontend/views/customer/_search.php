<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var frontend\models\CustomerSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'phone') ?>

		<?= $form->field($model, 'email') ?>

		<?= $form->field($model, 'password') ?>

		<?php // echo $form->field($model, 'id_user') ?>

		<?php // echo $form->field($model, 'id_kategori') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
