<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Pricelist';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/bg-05.png' ?>);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            <?= Html::encode($this->title) ?>
        </h2>

        <div class="flex-wr-c-c">
            <a href="<?= Yii::$app->request->baseUrl ?>" class="breadcrumb-item">
                Home
            </a>

            <span class="breadcrumb-item">
                <?= Html::encode($this->title) ?>
            </span>
        </div>
    </div>
</section>

<!-- Content -->
<div class="bg-0 p-t-85 p-b-50">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-9 p-b-50">
                <div class="p-l-35 p-l-0-sr767">
                    <div class="row">
                        <?php foreach ($pricelist as $pricelists) { ?>
                        <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                            <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                                <!-- <div class="ab-t-l w-full z-index-100 flex-wr-e-c p-all-10 pointer-e-none">
                                    <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-11 t1-s-5 cl-0 text-uppercase m-l-10">
                                        New
                                    </span>

                                    <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-13 t1-s-5 cl-0 text-uppercase m-l-10">
                                        Sale
                                    </span>
                                </div> -->

                                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['pricelist/detail?id=' . $pricelists->id_pricelist]) ?>" class="hov-img0 of-hidden w-full m-b-20">
                                    <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $pricelists->image_pricelist]) ?>" alt="IMG">
                                </a>

                                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['pricelist/detail?id=' . $pricelists->id_pricelist]) ?>" class="t1-m-7 text-uppercase cl-3 hov-link2 trans-02 txt-center">
                                    <?= $pricelists->name_pricelist ?>
                                </a>

                                <span class="t1-m-2 cl-6">
                                    <span class="p-rl-6">
                                        <?= $this->context->rupiah($pricelists->cost_pricelist); ?>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <?php 
                    } ?>

                    </div>

                    <!-- Pagination -->
                    <!-- <div class="pull-right flex-wr-s-c p-t-7">
                        <a href="#" class="flex-c-c pagi-item trans-02">
                            <i class="fa fa-angle-left fs-16"></i>
                        </a>

                        <a href="#" class="flex-c-c pagi-item trans-02 active-pagi">1</a>

                        <a href="#" class="flex-c-c pagi-item trans-02">2</a>

                        <a href="#" class="flex-c-c pagi-item trans-02">3</a>

                        <a href="#" class="flex-c-c pagi-item trans-02">4</a>

                        <a href="#" class="flex-c-c pagi-item trans-02">
                            <i class="fa fa-angle-right fs-16"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Other Product -->
<section class="bg-0 p-b-50">
    <div class="container">
        <div class="row">
            <!-- <?php foreach ($pricelist as $pricelists) { ?>
            <div class="col-sm-6 col-md-3 p-b-43">
                <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                    <div class="ab-t-l w-full z-index-100 flex-wr-e-c p-all-10 pointer-e-none">
                        <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-11 t1-s-5 cl-0 text-uppercase m-l-10">
                            New
                        </span>

                        <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-13 t1-s-5 cl-0 text-uppercase m-l-10">
                            Sale
                        </span>
                    </div>

                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['pricelist/detail?id=' . $pricelists->id_pricelist]) ?>" class="hov-img0 of-hidden w-full m-b-20">
                        <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $pricelists->image_pricelist]) ?>" alt="IMG">
                    </a>

                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['pricelist/detail?id=' . $pricelists->id_pricelist]) ?>" class="t1-m-7 text-uppercase cl-3 hov-link2 trans-02 txt-center">
                        <?= $pricelists->name_pricelist ?>
                    </a>

                    <span class="t1-m-2 cl-6">
                        <span class="p-rl-6">
                            <?= $this->context->rupiah($pricelists->cost_pricelist); ?>
                        </span>
                    </span>
                </div>
            </div>
            <?php 
        } ?> -->
        </div>
    </div>
</section> 