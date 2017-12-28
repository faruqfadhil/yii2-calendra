<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
use dosamigos\datepicker\DatePicker;

/**
* @var yii\web\View $this
* @var app\models\Timeline $model
* @var yii\widgets\ActiveForm $form
*/

?>
<div class="box box-warning">
   <div class="box-body">
<div class="timeline-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Timeline',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute held_at -->
			  <?= $form->field($model, 'tanggal')->textInput()->widget(DatePicker::className(), ['clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]]); ?>

<!-- attribute timeline_name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute description -->
			<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'id_event')->hiddenInput(['value'=>$id_event])->label(false) ?>
            <?= $form->field($model, 'flag')->hiddenInput(['value'=>1])->label(false) ?>

        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   =>  'Timeline',
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
</div>
</div>  

