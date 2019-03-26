<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Yearbook';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
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

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block2 -->
                <div class="block2 bg-img2" style="background-image: url(images/project-01.jpg);">
                    <div class="block2-content trans-04">
                        <h4 class="block2-title t1-m-1 cl-10 flex-s-c trans-04">
                            System Expansion
                        </h4>

                        <p class="t1-s-2 cl-10 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                        </p>

                        <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block2 -->
                <div class="block2 bg-img2" style="background-image: url(images/project-02.jpg);">
                    <div class="block2-content trans-04">
                        <h4 class="block2-title t1-m-1 cl-10 flex-s-c trans-04">
                            Training Skill
                        </h4>

                        <p class="t1-s-2 cl-10 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                        </p>

                        <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block2 -->
                <div class="block2 bg-img2" style="background-image: url(images/project-03.jpg);">
                    <div class="block2-content trans-04">
                        <h4 class="block2-title t1-m-1 cl-10 flex-s-c trans-04">
                            Business Consulting
                        </h4>

                        <p class="t1-s-2 cl-10 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                        </p>

                        <a href="projects-detail-01.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 