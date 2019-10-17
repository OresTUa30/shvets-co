<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700",
//        "lib/bootstrap/css/bootstrap.min.css",
//        "lib/font-awesome/css/font-awesome.min.css",
//        "lib/animate/animate.min.css",
//        "lib/ionicons/css/ionicons.min.css",
//        "lib/owlcarousel/assets/owl.carousel.min.css",
//        'css/style.css',
        "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
        "lib/font-awesome/css/font-awesome.min.css",
        "lib/animate/animate.min.css",
        "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css",
        "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",
        'css/style.css',

    ];
    public $js = [
//        "lib/jquery/jquery.min.js",
//        "lib/popper/popper.min.js",
//        "lib/bootstrap/js/bootstrap.min.js",
//        "lib/easing/easing.min.js",
//        "lib/owlcarousel/owl.carousel.min.js",
//        "lib/scrollreveal/scrollreveal.min.js",
//        "contactform/contactform.js",
//        'js/main.js',
        "https://code.jquery.com//jquery.min.js",
        "lib/popper/popper.min.js",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
        "lib/easing/easing.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js",
        "lib/scrollreveal/scrollreveal.min.js",
        "contactform/contactform.js",
        'js/main.js',
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//    ];
//    public $jsOptions = [
//        'position' => \yii\web\View::POS_HEAD,
//    ];
}
