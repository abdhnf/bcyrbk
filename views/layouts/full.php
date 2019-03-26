<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets_b\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::$app->request->baseUrl . '/favicon.png']); ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body scroll="no" style="overflow: hidden">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?> 