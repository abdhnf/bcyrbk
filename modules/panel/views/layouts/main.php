<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets_b\BackendAsset;

BackendAsset::register($this);
Yii::$app->setHomeUrl(Yii::$app->request->baseUrl . '/panel');
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

<body class="horizontal-navigation">
    <?php $this->beginBody() ?>

    <header class="site-header">
        <div class="container-fluid">
            <a href="<?= Yii::$app->homeUrl; ?>" class="site-logo">
                <img class="hidden-md-down" src="<?= Yii::$app->request->baseUrl . '/assets_b/backend/img/logo-2.png' ?>" alt="">
                <img class="hidden-lg-down" src="<?= Yii::$app->request->baseUrl . '/assets_b/backend/img/logo-2-mob.png' ?>" alt="">
            </a>

            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>

            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">

                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= Yii::$app->request->baseUrl . '/assets_b/backend/img/avatar-2-64.png' ?>" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                            </div>
                        </div>

                        <!-- <button type="button" class="burger-right">
                            <i class="font-icon-menu-addl"></i>
                        </button> -->
                    </div>
                    <!--.site-header-shown-->

                    <div class="mobile-menu-right-overlay"></div>
                    <div class="site-header-collapsed">
                        <div class="site-header-collapsed-in">
                            <div class="dropdown dropdown-typical">
                                <div class="dropdown-menu" aria-labelledby="dd-header-sales">
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>

                        </div>
                        <!--.site-header-collapsed-in-->
                    </div>
                    <!--.site-header-collapsed-->
                </div>
                <!--site-header-content-in-->
            </div>
            <!--.site-header-content-->
        </div>
        <!--.container-fluid-->
    </header>
    <!--.site-header-->
    <div class="mobile-menu-left-overlay"></div>
    <ul class="main-nav nav nav-inline">
        <li class="nav-item">
            <a class="nav-link <?php if ($this->context->route == 'panel/default/index') : ?> <?= "active" ?> <?php endif; ?>" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/panel']) ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?php if ($this->context->route == 'panel/yearbook/index') : ?> <?= "active" ?> <?php endif; ?>" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/panel/yearbook']) ?>">Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?php if ($this->context->route == 'panel/pricelist/index') : ?> <?= "active" ?> <?php endif; ?>" href=" <?= Yii::$app->urlManager->createAbsoluteUrl(['/panel/pricelist']) ?>">Pricelist</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
    </ul>

    <div class="page-content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3><?= $this->title; ?></h3>
                            <?= Breadcrumbs::widget([
                                'options' => [
                                    'class' => "breadcrumb breadcrumb-simple",
                                ],
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </header>

            <?= $content ?>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?> 