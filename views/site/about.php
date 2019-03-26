<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/about.jpg' ?>);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            <?= Html::encode($this->title) ?>
        </h2>

        <div class="flex-wr-c-c">
            <a href="index" class="breadcrumb-item">
                Home
            </a>

            <span class="breadcrumb-item">
                <?= Html::encode($this->title) ?>
            </span>
        </div>
    </div>
</section>

<section class="bg-0 p-t-92 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-35">
                <!-- Title section -->
                <div class="flex-col-c-s p-b-35">
                    <h3 class="t1-b-1 cl-3 m-b-11">
                        About
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

                <div class="p-r-20 p-r-0-sr767">
                    <p class="t1-s-2 cl-6 m-b-10">
                        Kami adalah Agensi Kreative yang bergerak dalam Pembuatan
                        Buku Tahunan Sekolah atau disebut School Yearbook, Kami sangat
                        tertarik mengembangkan usaha dalam bidang ini, karena disamping
                        menambah hubungan baik dan kerja sama juga membantu
                        memudahkan custumer dalam hal yang berhubungan dengan
                        industri kreatif. Kami BC Yearbook berdiri pada tahun 2017, Namun
                        kami sudah mempunyai Pengalaman di bidang ini Sejak Tahun
                        2011 dan saat ini kami sudah memulai mengerjakan beberapa
                        Pekerjaan Di Sekolahan - sekolahan di daerah Jawa Tengah
                        seperti Kartasura, Sukoharjo, Wonogiri, Karanganyar dan Surakarta
                        dan kamiakan terus mengembangkan keseluruh Indonesia.
                    </p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 p-b-35">
                <!-- Title section -->
                <div class="flex-col-c-s p-b-35">
                    <h3 class="t1-b-1 cl-3 m-b-11">
                        Mission & Vision
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

                <div class="p-r-20 p-r-0-sr767">
                    <p class="t1-s-2 cl-6 m-b-10">
                        <span class="t1-s-5 cl-3">Vision :</span>Menjadi UMKM industri kreatif yang dapat selalu memberikan kepuasan
                        kepada castomer dalam pengaplikasian ide-ide yang kreatif, unik, dan
                        menarik serta bekerja dengan profesional khususnya di bidang Buku
                        Tahunan Sekolah.
                    </p>
                    <p class="t1-s-2 cl-6 m-b-10">
                        <span class="t1-s-5 cl-3">Mission :</span>
                        <ul class="p-tb-1">
                            <li class="t1-s-2 cl-6 m-b-9 kit-list2">
                                Membangun lingkungan kerja yang profesional dan menyenangkan
                                bersama dengan tim-tim yang kreatif,dan penuh dengan ide-ide unik.
                            </li>
                            <li class="t1-s-2 cl-6 m-b-9 kit-list2">
                                Membangun jaringan atau Partner Kerja yang spositif dan seluas-luasnya
                                dengan Sekolahan - sekolahan Baik SD, SMP, SMK/ SMA lain dalam bidang
                                School Yearbook
                            </li>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> 