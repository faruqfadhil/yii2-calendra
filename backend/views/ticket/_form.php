<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Ticket $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Ticket',
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

<!-- attribute description -->
			<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<!-- attribute price -->
			<?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

<!-- attribute jumlah -->
			<?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'kategori')->dropDownList(['vvip' => 'vvip', 
                                                                          'vip' => 'vip',
                                                                        'reguler' => 'reguler'],
                                                                        ['prompt'=>'Kategori']);?>

   <?= $form->field($model, 'id_event')->hiddenInput(['value' => $id_event])->label(false) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => 'Ticket',
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

