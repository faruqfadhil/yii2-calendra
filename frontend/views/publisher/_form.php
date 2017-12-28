<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var frontend\models\Publisher $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="publisher-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Publisher',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute phone -->
			<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<!-- attribute email -->
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!-- attribute password -->
			<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

<!-- attribute description -->
			<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

<!-- attribute alamat -->
			<?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

<!-- attribute flag -->
			<?= $form->field($model, 'flag')->textInput() ?>

<!-- attribute id_user -->
			<?= $form->field($model, 'id_user')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Publisher'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

