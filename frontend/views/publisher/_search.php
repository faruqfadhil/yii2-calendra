<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var frontend\models\PublisherSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="publisher-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'phone') ?>

		<?= $form->field($model, 'email') ?>

		<?= $form->field($model, 'password') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'alamat') ?>

		<?php // echo $form->field($model, 'flag') ?>

		<?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
