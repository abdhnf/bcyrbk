<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Yearbook */
?>

<div class="row">
    <div class="col-md-12">
        <section class="box-typical">
            <header class="box-typical-header-sm"></header>
            <article class="profile-info-item">
                <header class="profile-info-item-header">
                    <i class="font-icon font-icon-build"></i>
                    Nama Sekolah
                </header>
                <div class="text-block text-block-typical">
                    <?= $model->name_yearbook ?>
                </div>
            </article>
            <!--.profile-info-item-->

            <article class="profile-info-item">
                <header class="profile-info-item-header">
                    <i class="font-icon font-icon-earth-bordered"></i>
                    Alamat Sekolah
                </header>
                <div class="text-block text-block-typical">
                    <?= $model->address_yearbook ?>
                </div>
            </article>
            <!--.profile-info-item-->

            <article class="profile-info-item">
                <header class="profile-info-item-header">
                    <i class="font-icon font-icon-notebook"></i>
                    Deskripsi Sekolah
                </header>
                <div class="text-block text-block-typical">
                    <?= $model->description_yearbook ?>
                </div>
            </article>
            <!--.profile-info-item-->

            <article class="profile-info-item">
                <header class="profile-info-item-header">
                    <i class="font-icon font-icon-picture"></i>
                    Thumbnail
                </header>

                <article class="post-announce">
                    <div class="post-announce-pic">
                        <a href="#" tabindex="0">
                            <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/thumbnail/' . $model->thumbnail_yearbook]) ?>" alt="">
                        </a>
                    </div>
                </article>
                <!--.skill-item-->
            </article>
            <!--.profile-info-item-->

            <article class="profile-info-item">
                <header class="profile-info-item-header">
                    <i class="font-icon font-icon-star"></i>
                    Header
                </header>
                <article class="post-announce">
                    <div class="post-announce-pic">
                        <a href="#" tabindex="0">
                            <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/header/' . $model->header_yearbook]) ?>" alt="">
                        </a>
                    </div>
                </article>
            </article>
            <!--.profile-info-item-->
        </section>
        <!--.box-typical-->

        <section class="box-typical box-typical-full-height-with-header">
            <header class="box-typical-header box-typical-header-bordered">
                <div class="tbl-row">
                    <div class="tbl-cell tbl-cell-title">
                        <h3>Gallery</h3>
                    </div>
                </div>
            </header>
            <div class="box-typical-body">
                <div class="gallery-grid">

                    <?php foreach ($gallery as $gallerys) { ?>
                    <div class="gallery-col">
                        <article class="gallery-item">
                            <img class="gallery-picture" src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/gallery/' . $gallerys->id_yearbook . '/' . $gallerys->image_gallery_yearbook]) ?>" alt="" size="auto">
                            <div class="gallery-hover-layout">
                                <div class="gallery-hover-layout-in">
                                    <p class="gallery-item-title"></p>
                                    <p>Delete</p>
                                    <div class="btn-group">

                                        <a class="btn btn-danger btn-xs" href="<?= Yii::$app->request->baseUrl . '/panel/yearbook/delgallery?id=' . $gallerys->id_gallery_yearbook ?>" title="Hapus" data-pjax="0" data-method="post" data-confirm="Apakah anda setuju akan menghapus item ini?"><span class="fa fa-trash"></span></a>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--.gallery-col-->
                    <?php 
                } ?>
                </div>
                <!--.gallery-grid-->
            </div>
            <!--.box-typical-body-->
        </section>
        <!--.box-typical-->
    </div>
</div> 