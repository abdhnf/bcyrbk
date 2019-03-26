<?php

/* @var $this yii\web\View */

$this->title = 'BC Yearbook - Home';
?>

<?php if (\Yii::$app->devicedetect->isMobile() == 0) { ?>
<!-- Slider -->
<section class="slider">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="slidingoverlayhorizontal">
                    <img src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/slide-01.jpg' ?>" alt="IMG-SLIDE" class="rev-slidebg">

                    <!-- <h2 class="tp-caption tp-resizeme caption-1 text-uppercase" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['48', '48', '48', '38']" data-lineheight="['58', '58', '58', '58']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-83', '-83', '-83', '-93']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">Welcome to the Arges</h2>

                    <p class="tp-caption tp-resizeme caption-2" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['30', '30', '30', '25']" data-lineheight="['39', '39', '39', '39']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-13', '-13', '-13', '-13']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">
                        We stand behind your success
                    </p>

                    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex" data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['88', '88', '88', '88']" data-width="['1200','992','768','480']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[10, 10, 10, 10]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[10, 10, 10, 10]" data-basealign="slide" data-responsive_offset="off">
                        <a href="projects-grid.html" class="btn1 flex-c-c">
                            Our project
                        </a>

                        <a href="about.html" class="btn2 flex-c-c">
                            Learn more
                        </a>
                    </div> -->
                </li>

                <!-- Slide 2 -->
                <li data-transition="slidingoverlayvertical">
                    <img src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/slide-02.jpg' ?>" alt="IMG-SLIDE" class="rev-slidebg">

                    <!-- <h2 class="tp-caption tp-resizeme caption-1 text-uppercase" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['48', '48', '48', '38']" data-lineheight="['58', '58', '58', '58']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-83', '-83', '-83', '-93']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">Welcome to the Arges</h2>

                    <p class="tp-caption tp-resizeme caption-2" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['30', '30', '30', '25']" data-lineheight="['39', '39', '39', '39']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-13', '-13', '-13', '-13']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">
                        We stand behind your success
                    </p>

                    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex" data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['88', '88', '88', '88']" data-width="['1200','992','768','480']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[10, 10, 10, 10]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[10, 10, 10, 10]" data-basealign="slide" data-responsive_offset="off">
                        <a href="projects-grid.html" class="btn1 flex-c-c">
                            Our project
                        </a>

                        <a href="about.html" class="btn2 flex-c-c">
                            Learn more
                        </a>
                    </div> -->
                </li>

                <!-- Slide 3 -->
                <li data-transition="boxslide">
                    <img src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/slide-03.jpg' ?>" alt="IMG-SLIDE" class="rev-slidebg">

                    <!-- <h2 class="tp-caption tp-resizeme caption-1 text-uppercase" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['48', '48', '48', '38']" data-lineheight="['58', '58', '58', '58']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-83', '-83', '-83', '-93']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">Welcome to the Arges</h2>

                    <p class="tp-caption tp-resizeme caption-2" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['30', '30', '30', '25']" data-lineheight="['39', '39', '39', '39']" data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-13', '-13', '-13', '-13']" data-width="['1200','992','768','480']" data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">
                        We stand behind your success
                    </p>

                    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex" data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['88', '88', '88', '88']" data-width="['1200','992','768','480']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[10, 10, 10, 10]" data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[10, 10, 10, 10]" data-basealign="slide" data-responsive_offset="off">
                        <a href="projects-grid.html" class="btn1 flex-c-c">
                            Our project
                        </a>

                        <a href="about.html" class="btn2 flex-c-c">
                            Learn more
                        </a>
                    </div> -->
                </li>
            </ul>
        </div>
    </div>
</section>
<?php 
} else {  ?>
<section class="parallax100 kit-overlay2 p-t-92 p-b-90" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/bg-03.jpg' ?>);">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-0 txt-center m-b-11">
                Selamat Datang Official Website<br>BC Yearbook
            </h3>

            <div class="size-a-2 bg-0"></div>
        </div>

        <!-- Slick1 -->
        <!-- <div class="wrap-slick1">
            <div class="slide-slick">
                <div class="item-slick p-rl-15 wrap-block3" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/slide-01.jpg' ?>);">
                    <div class=" block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block2-pic wrap-pic-w">
                                <img src="images/ava-01.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Marie Crawford
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick p-rl-15 wrap-block3">
                    <div class="block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block3-pic wrap-pic-w">
                                <img src="images/ava-02.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Jerry Alexander
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick p-rl-15 wrap-block3">
                    <div class="block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block3-pic wrap-pic-w">
                                <img src="images/ava-01.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Marie Crawford
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick p-rl-15 wrap-block3">
                    <div class="block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block3-pic wrap-pic-w">
                                <img src="images/ava-02.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Jerry Alexander
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick p-rl-15 wrap-block3">
                    <div class="block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block3-pic wrap-pic-w">
                                <img src="images/ava-01.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Marie Crawford
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick p-rl-15 wrap-block3">
                    <div class="block3 d-flex">
                        <div class="block3-content d-flex">
                            <div class="block3-pic wrap-pic-w">
                                <img src="images/ava-02.jpg" alt="IMG">
                            </div>

                            <div class="block3-text d-flex w-full-sr575">
                                <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
                                    Jerry Alexander
                                </span>

                                <span class="block3-text-child t1-s-3 cl-14 p-b-9">
                                    Wall Street Combany
                                </span>

                                <p class="block3-text-child t1-s-2 cl-13">
                                    The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-dot-slick p-t-70"></div>
        </div> -->
    </div>
</section>
<?php 
} ?>


<!-- Why Chosse Us -->
<section class="bg-12 p-t-92 p-b-70">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Why Chosse Us
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-01-dark.png' ?>" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-01-light.png' ?>" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            KONSEP ATRAKTIF DAN TERBUKA
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-10 txt-center p-b-26">
                            Kami melayani setiap ide dan kreatifitas
                            dari apaa nyg diinginakn dari customer.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-02-dark.png' ?>" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-02-light.png' ?>" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            HARGA RASIONAL
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-10 txt-center p-b-26">
                            Harga kami bervariatif dan
                            ditentukan sesuai dengan keinginan dari
                            costumer sesuai budget yang diinginkan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-03-dark.png' ?>" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-03-light.png' ?>" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            WAKTU PENGERJAAN
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-10 txt-center p-b-26">
                            Waktu pengerjaan akan kami lakukan
                            dengan timeline ketat dan progresive
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-04-dark.png' ?>" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/icons/symbol-04-light.png' ?>" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            KUALITAS
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-10 txt-center p-b-26">
                            Prinsip kita dalam menjalankan
                            Agensi Kreative ini adalah quality and
                            satisfication it’s must
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project -->
<section class="bg-16 p-t-92 p-b-60">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-0 txt-center m-b-11">
                Featured Projects
            </h3>

            <div class="size-a-2 bg-0"></div>
        </div>

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
        </div>

        <div class="row justify-content-center">
            <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['yearbook']) ?>" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                More
            </a>
        </div>
    </div>
</section>

<!-- Partners -->
<section class="bg-0 p-t-92 p-b-40">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Partners
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="anu row justify-content-center">
            <!-- <div class="anu"> -->
            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-Batik-2-SKA.png' ?>" alt="Batik2">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-1-SKA.png' ?>" alt="IMG">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-N-2-SKA.png' ?>" alt="IMG">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-N-3-SKA.png' ?>" alt="IMG">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-N-4-SKA.png' ?>" alt="IMG">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-Sahid-SKA.png' ?>" alt="IMG">
                </a>
            </div>

            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/logo/SMK-Muh-1-SKA.png' ?>" alt="IMG">
                </a>
            </div>
            <!-- </div> -->
        </div>
    </div>
</section>

<?php
$script = <<< JS
    $('.single-item').slick();

    $('.anu').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 5,
  arrows:false,
  //fade: true,
  //accessibility: false,
  centerMode: true,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ]
});
JS;
$this->registerJs($script);
?> 