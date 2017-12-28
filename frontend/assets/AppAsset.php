<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/SevenApp/css/bootstrap.min.css',
        'themes/SevenApp/css/animate.css',
        'themes/SevenApp/css/font-awesome.min.css',
        'themes/SevenApp/css/owl.carousel.css',
        'themes/SevenApp/css/owl.theme.css',
        'themes/SevenApp/css/styles.css',
    ];

    public $js = [
        // 'themes/SevenApp/js/jquery.min.js',
        'themes/SevenApp/js/bootstrap.min.js',
//        'themes/SevenApp/js/modernizr.custom.32033.js',
        'themes/SevenApp/js/owl.carousel.min.js',
        'themes/SevenApp/js/waypoints.min.js',
// 'https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false',
        'themes/SevenApp/rs-plugin/js/jquery.themepunch.plugins.min.js',
        'themes/SevenApp/rs-plugin/js/jquery.themepunch.revolution.min.js',
        // 'themes/SevenApp/js/script.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
