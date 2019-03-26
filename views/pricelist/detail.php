<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Pricelict Detail #' . $model->name_pricelist;
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $model->image_pricelist]) ?>);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            <?= Html::encode($this->title) ?>
        </h2>

        <div class="flex-wr-c-c">
            <a href="<?= Yii::$app->request->baseUrl ?>" class="breadcrumb-item">
                Home
            </a>

            <a href="<?= Yii::$app->request->baseUrl . '/princelist' ?>" class="breadcrumb-item">
                Pricelist
            </a>

            <span class="breadcrumb-item">
                <?= Html::encode($this->title) ?>
            </span>
        </div>
    </div>
</section>

<!-- Content -->
<div class="bg-0 p-t-85 p-b-65">
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-30">
                <!-- <div class="block2 bg-img2" style="background-image: url(<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $model->cost_pricelist]) ?>);"></div> -->
                <img class="max-s-full" src="<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $model->image_pricelist]) ?>" alt="IMG">
            </div>
            <div class="col-sm-10 col-md-6 p-b-30">
                <div class="p-l-15 flex-col-s-s p-l-0-sr767">
                    <h4 class="t1-m-5 cl-3 text-uppercase m-b-8 js-name1">
                        <?= $model->name_pricelist ?>
                    </h4>

                    <span class="t1-m-7 cl-6 m-b-14">
                        <span class="m-r-12">
                            <?= $this->context->rupiah($model->cost_pricelist); ?>
                        </span>
                    </span>

                    <div class="t1-s-2 cl-6 m-b-40">
                        <?= $model->description_pricelist ?>
                    </div>

                    <a href="https://api.whatsapp.com/send?phone=6281326787846&text=Halo kak,saya ingin pesan *<?= $model->name_pricelist ?>*" class="block5-2 flex-c-c bg-11 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02" target="_blank">
                        <i class="fa fa-phone fs-24 m-r-10"></i>
                        Order
                    </a>
                </div>
            </div>
        </div>

    </div>
</div> 