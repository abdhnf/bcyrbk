<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets_b\FrontendAsset;

FrontendAsset::register($this);
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

<body class="animsition">
    <?php $this->beginBody() ?>

    <header>
        <!-- Header desktop -->
        <nav class="container-header-desktop">
            <div class="top-bar">
                <div class="content-topbar container flex-sb-c h-full">
                    <div class="size-w-0 flex-wr-s-c">

                        <div class="t1-s-1 cl-10 m-r-50">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <span>(+62) 813 2678 7846</span>
                        </div>

                        <div class="t1-s-1 cl-10 m-r-50">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>Mon-Sat 08:00 am - 16:00 pm/Sunday CLOSE</span>
                        </div>
                    </div>

                    <div class="text-nowrap">
                        <a href="https://instagram.com/bcyearbook01" class="fs-16 cl-10 hov-link4 trans-02 m-l-15" target="_blank">
                            <i class="fa fa-instagram"></i> instagram
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <div class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <div class="logo">
                        <a href="<?= Yii::$app->request->baseUrl ?>"><img src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo-01.png' ?>" alt="LOGO"></a>
                    </div>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu respon-sub-menu">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>">Home</a></li>

                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/yearbook' ?>">Projects</a>
                            </li>

                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/pricelist' ?>">Pricelist</a>
                            </li>

                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/about' ?>">About Us</a>
                            </li>

                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/contact' ?>">Contact us</a>
                            </li>
                            <?php if (!Yii::$app->user->isGuest) {
                                ?>
                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/logout' ?>" data-method="post"">Log Out</a>
                            </li>
                            <?php 
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header Mobile -->
        <nav class=" container-header-mobile">
                                    <div class="wrap-header-mobile">
                                        <!-- Logo moblie -->
                                        <div class="logo-mobile">
                                            <a href="<?= Yii::$app->request->baseUrl ?>"><img src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo-01.png' ?>" alt="LOGO"></a>
                                        </div>


                                        <!-- Button show menu -->
                                        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="menu-mobile">
                                        <ul class="top-bar-m p-l-20 p-tb-8">
                                            <!-- <li>
                        <div class="t1-s-1 cl-5 p-tb-3">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            <span>379 5Th Ave New York, Nyc 10018</span>
                        </div>
                    </li> -->

                                            <li>
                                                <div class="t1-s-1 cl-5 p-tb-3">
                                                    <span class="fs-16 m-r-6">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                    </span>
                                                    <span>(+62) 813 2678 7846</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="t1-s-1 cl-5 p-tb-3">
                                                    <span class="fs-16 m-r-6">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span>Mon-Sat 08:00 am - 16:00 pm/Sunday CLOSE</span>
                                                </div>
                                            </li>

                                            <!-- <li>
                        <div>
                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-facebook-official"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </li> -->
                                        </ul>
                                    </div>
        </nav>
    </header>

    <?= $content ?>

    <footer>
        <div class="parallax100 kit-overlay1 p-t-35 p-b-10" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/bg-03.jpg' ?>);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e p-b-5 m-b-18">
                            <a href="#">
                                <img class="max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo-02.png' ?>" alt="IMG">
                            </a>
                        </div>

                        <div>
                            <p class="t1-s-2 cl-10 p-b-17">
                                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized the charms of pleasure of.
                            </p>

                            <div class="flex-wr-s-c p-t-10">
                                <!-- <a href="#" class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-google-plus"></i>
                                </a> -->

                                <a href="https://api.whatsapp.com/send?phone=6281326787846&text=Halo kak,saya tertarik dengan produknya." class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10" target="_blank">
                                    <i class="fa fa-whatsapp"></i>
                                </a>

                                <a href="https://instagram.com/bcyearbook01" class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <!-- <a href="#" class="flex-c-c size-a-7 borad-50per bg-10 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-linkedin"></i> -->
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                Contact us
                            </h4>
                        </div>

                        <ul>
                            <li class="flex-wr-s-s t1-s-2 cl-10 p-b-9">
                                <span class="size-w-3">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </span>

                                <span class="size-w-4">
                                    Perum Grand Aliza No. 5 B
                                    Paulan, Colomadu, Karanganyar, Surakarta.
                                </span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-10 p-b-9">
                                <span class="size-w-3">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>

                                <span class="size-w-4">
                                    contac@bcyearbook.com
                                </span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-10 p-b-9">
                                <span class="size-w-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>

                                <span class="size-w-4">
                                    (+62) 813 2678 7846
                                </span>
                            </li>
                        </ul>
                    </div>

                    <!-- <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                Company
                            </h4>
                        </div>

                        <div class="flex-wr-s-s">
                            <ul class="w-50">
                                <li class="kit-list1 p-b-9">
                                    <a href="index.html" class="t1-s-2 cl-10 hov-link2 trans-02">
                                        Home
                                    </a>
                                </li>

                                <li class="kit-list1 p-b-9">
                                    <a href="projects-grid.html" class="t1-s-2 cl-10 hov-link2 trans-02">
                                        Projects
                                    </a>
                                </li>

                                <li class="kit-list1 p-b-9">
                                    <a href="contact.html" class="t1-s-2 cl-10 hov-link2 trans-02">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <ul class="w-50">
                                <li class="kit-list1 p-b-9">
                                    <a href="about.html" class="t1-s-2 cl-10 hov-link2 trans-02">
                                        About us
                                    </a>
                                </li>

                                <li class="kit-list1 p-b-9">
                                    <a href="shop-grid.html" class="t1-s-2 cl-10 hov-link2 trans-02">
                                        Pricelist
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <div class="col-sm-8 col-md-6 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                Maps
                            </h4>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8334802671901!2d110.75263722915872!3d-7.538513270146493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1485cd8ddd1f%3A0x88ed8e5fc5a28252!2sUnnamed+Road%2C+Sanggir+Lor%2C+Paulan%2C+Colomadu%2C+Karanganyar+Regency%2C+Central+Java+57176!5e0!3m2!1sid!2sid!4v1552404116208" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-15">
            <div class="container txt-center p-tb-15">
                <span class="t1-s-2 cl-10">
                    Copyright @ 2019 Designed by pencilblue. Code By ABDHNF.
                </span>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?> 