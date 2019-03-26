<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Yearbook Detail #' . $model->name_yearbook;
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->request->baseUrl . '/files/img/header/' . $model->header_yearbook ?>);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            <?= Html::encode($this->title) ?>
        </h2>

        <div class="flex-wr-c-c">
            <a href="<?= Yii::$app->request->baseUrl ?>" class="breadcrumb-item">
                Home
            </a>

            <a href="<?= Yii::$app->request->baseUrl . '/yearbook' ?>" class="breadcrumb-item">
                Yearbook
            </a>

            <span class="breadcrumb-item">
                <?= Html::encode($this->title) ?>
            </span>
        </div>
    </div>
</section>

<!-- Content -->
<section class="bg-0 p-t-84 p-b-100">
    <div class="container">
        <div class="flex-wr-sb-c bo-b-1 bcl-12 p-b-12 m-b-24">
            <h3 class="t1-b-3 cl-3 m-r-30 m-tb-10">
                <?= $model->name_yearbook ?>
            </h3>

            <div class="m-rl--10 m-tb-10">
                <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-rl-10">
                    <i class="fa fa-facebook-f"></i>
                </a>

                <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-rl-10">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-rl-10">
                    <i class="fa fa-google-plus"></i>
                </a>

                <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-rl-10">
                    <i class="fa fa-instagram"></i>
                </a>

                <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-rl-10">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 p-b-30">
                <ul>
                    <li class="m-b-7">
                        <span class="t1-s-5 cl-3">
                            Clients:
                        </span>

                        <span class="t1-s-2 cl-6">
                            Au Business
                        </span>
                    </li>

                    <li class="m-b-7">
                        <span class="t1-s-5 cl-3">
                            Location:
                        </span>

                        <span class="t1-s-2 cl-6">
                            <?= $model->address_yearbook ?>
                        </span>
                    </li>

                    <li class="m-b-7">
                        <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['yearbook/pdf?id=' . $model->id_yearbook]) ?>" target="_blank" class="block5-2 flex-c-c bg-1 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02">
                            <i class="fa fa-eye fs-24 m-r-10"></i>
                            View
                        </a>
                    </li>

                    <li class="m-b-7">
                        <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook]) ?>" class="block5-2 flex-c-c bg-11 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02">
                            <i class="fa fa-download fs-24 m-r-10"></i>
                            Dowload
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-7 p-b-30">
                <div class="t1-s-2 cl-6 m-b-12">
                    <?= $model->description_yearbook ?>
                </div>
            </div>
            <?php
            if (!file_exists(Yii::getAlias('@app') . '/files/img/qrcode/' . $model->id_yearbook . '.png')) { ?>
            <div class="col-md-2 p-b-30">
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['yearbook/qrcode?id=' . $model->id_yearbook]) ?>" class="block5-2 flex-c-c bg-1 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02">
                    <i class="fa fa-qrcode fs-24 m-r-10"></i>
                    Create Qrcode
                </a>
            </div>
            <?php

        } else { ?>
            <div class="col-md-2 p-b-30">
                <img src="<?= Yii::$app->request->baseUrl . '/files/img/qrcode/' . $model->id_yearbook . '.png' ?>" alt="Qr Code" class="img-thumbnail">
            </div>
            <?php 
        } ?>

            <div class="col-12 p-b-20">
                <div class="flex-wr-s-s p-t-6 gallery-mp">
                    <?php foreach ($gallery as $gallerys) { ?>
                    <a href="<?= Yii::$app->request->baseUrl . '/files/img/gallery/' . $gallerys->id_yearbook . '/' . $gallerys->image_gallery_yearbook ?>" class="d-block size-a-8 bg-img1 hov-overlay1 m-r-10 m-b-20 js-show-gallery" style="background-image: url(<?= Yii::$app->request->baseUrl . '/files/img/gallery/' . $gallerys->id_yearbook . '/' . $gallerys->image_gallery_yearbook ?>);"></a>
                    <?php 
                } ?>
                </div>
            </div>
        </div>
        <?php
        ?>
        <!-- Block5 -->
        <div class="block5 flex-wr-sb-c bo-t-1 bcl-14">

            <a href="<?= Yii::$app->request->baseUrl . '/yearbook/detail?id=' . $navigasi[0]->id_yearbook ?>" class="block5-1 bg-img2" style="background-image: url(<?= Yii::$app->request->baseUrl . '/files/img/thumbnail/' . $navigasi[0]->thumbnail_yearbook ?>);" title="Back"></a>

            <a href="index" class="block5-2 flex-c-c bg-11 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02">
                <i class="fa fa-th fs-24 m-r-10"></i>
                Yearbook
            </a>

            <a href="<?= Yii::$app->request->baseUrl . '/yearbook/detail?id=' . $navigasi[1]->id_yearbook ?>" class="block5-3 bg-img2" style="background-image: url(<?= Yii::$app->request->baseUrl . '/files/img/thumbnail/' . $navigasi[1]->thumbnail_yearbook ?>);" title="Next"></a>
        </div>
    </div>
</section> 