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
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets_b/backend';
    public $css = [
        'css/lib/lobipanel/lobipanel.min.css',
        'css/separate/vendor/lobipanel.min.css',
        'css/lib/jqueryui/jquery-ui.min.css',
        'css/separate/pages/widgets.min.css',
        'css/separate/pages/profile.min.css',
        'css/separate/pages/gallery.min.css',
        'css/separate/pages/login.min.css',
        'css/separate/vendor/slick.min.css',
        'css/lib/bootstrap/bootstrap.min.css',
        'css/lib/font-awesome/font-awesome.min.css',
        'css/main.css',
    ];
    public $js = [
        //'js/lib/jquery/jquery-3.2.1.min.js',
        'js/lib/tether/tether.min.js',
        'js/lib/popper/popper.min.js',
        'js/lib/bootstrap/bootstrap.min.js',
        'js/plugins.js',
        'js/lib/lobipanel/lobipanel.min.js',
        'js/lib/match-height/jquery.matchHeight.min.js',
        'js/lib/jqueryui/jquery-ui.min.js',
        'js/lib/slick-carousel/slick.min.js',
        'js/plugins.js',
        'js/app.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
