<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row" <?php
    if (stristr($_SERVER['HTTP_USER_AGENT'], "Mobile")) { // if mobile browser
        ?>
        style="padding-left: 20px;padding-right: 20px;padding-top: 59px;"
        <?php
    } else { // desktop browser
        ?>

        <?php
    }
    ?>
    >
        <div class="col-md-16 col-md-offset-3">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to signup:</p>

            <div class="row">
                <div class="col-lg-8">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

<!-- attribute name -->
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            <!-- attribute password -->
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
            <!-- attribute phone -->
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            <!-- attribute description -->
            <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

<!-- attribute alamat -->
            <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
                  
                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                                
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
