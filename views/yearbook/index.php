<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Yearbook';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/bg-06.png' ?>);">
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

<section class="bg-0 p-t-92 p-b-60">
    <div class="container">

        <!--  -->
        <div class="row justify-content-center">
            <?php foreach ($yrbk as $yrbks) { ?>
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block2 -->
                <div class="block2 bg-img2" style="background-image: url(<?= Yii::$app->urlManager->createAbsoluteUrl(['files/img/thumbnail/' . $yrbks->thumbnail_yearbook]) ?>);">
                    <div class="block2-content trans-04">
                        <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
                            <?= $yrbks->name_yearbook ?>
                        </h4>

                        <div class="t1-s-2 cl-10 p-b-10">
                            <?= substr($yrbks->description_yearbook, 0, 150); ?>
                        </div>

                        <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['yearbook/detail?id=' . $yrbks->id_yearbook]) ?>" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <?php 
        } ?>
            <?php if ($total & 1) { ?>
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
            </div>
            <?php 
        } else { ?>
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
            </div>
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
            </div>
            <?php 
        } ?>
        </div>
    </div>
</section> 