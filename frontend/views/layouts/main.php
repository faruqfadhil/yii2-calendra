<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src="<?= Yii::$app->request->baseUrl.'/themes/SevenApp/js/modernizr.custom.32033.js' ?>"></script>

    <?php $this->head() ?>
</head>
<body cz-shortcut-listen="true">
<?php $this->beginBody() ?>
<!---->
    <?= $this->render('navbar') ?>
    <?= $content ?>
    <?= $this->render('footer') ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
