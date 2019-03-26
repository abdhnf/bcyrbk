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
class ErrorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets_b/error';
    public $css = [
        'css/separate/pages/error.min.css',
        'css/lib/font-awesome/font-awesome.min.css',
        'css/main.css',
    ];
    public $js = [];
    public $depends = [
        //'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
