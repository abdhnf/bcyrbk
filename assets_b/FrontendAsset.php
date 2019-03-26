<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets_b;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets_b/frontend';
    public $css = [
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'vendor/animate/animate.css',
        'vendor/css-hamburgers/hamburgers.min.css',
        'vendor/animsition/css/animsition.min.css',
        'vendor/revolution/css/layers.css',
        'vendor/revolution/css/navigation.css',
        'vendor/revolution/css/settings.css',
        'vendor/revolution/css/settings.css',
        'vendor/MagnificPopup/magnific-popup.css',
        'css/util.min.css',
        'vendor/slick/slick.css',
        'vendor/slick/slick/slick-theme.css',
        'css/main.css'
    ];
    public $js = [
        'vendor/animsition/js/animsition.min.js',
        'vendor/bootstrap/js/popper.js',
        'vendor/revolution/js/jquery.themepunch.tools.min.js',
        'vendor/revolution/js/jquery.themepunch.revolution.min.js',
        'vendor/revolution/js/extensions/revolution.extension.video.min.js',
        'vendor/revolution/js/extensions/revolution.extension.carousel.min.js',
        'vendor/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendor/revolution/js/extensions/revolution.extension.actions.min.js',
        'vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'vendor/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'vendor/revolution/js/extensions/revolution.extension.navigation.min.js',
        'vendor/revolution/js/extensions/revolution.extension.migration.min.js',
        'vendor/revolution/js/extensions/revolution.extension.migration.min.js',
        'js/revo-custom.js',
        'vendor/parallax100/parallax100.js',
        'vendor/waypoint/jquery.waypoints.min.js',
        'vendor/countterup/jquery.counterup.min.js',
        'vendor/slick/slick.min.js',
        'js/slick-custom.js',
        'vendor/MagnificPopup/jquery.magnific-popup.min.js',
        'js/main.js',
    ];
    public $depends = [
        //'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
