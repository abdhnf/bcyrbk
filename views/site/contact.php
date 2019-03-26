<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(<?= Yii::$app->request->baseUrl . '/assets_b/frontend/images/bg-06.png' ?>);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            <?= Html::encode($this->title) ?>
        </h2>

        <div class="flex-wr-c-c">
            <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['index']) ?>" class="breadcrumb-item">
                Home
            </a>

            <span class="breadcrumb-item">
                <?= Html::encode($this->title) ?>
            </span>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="bg-0 p-t-95 p-b-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-60">
                <h3 class="t1-m-5 cl-3 m-b-44">
                    Send Us A Message
                </h3>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'full_name')->textInput(['maxlength' => true, 'class' => 'size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1', 'placeholder' => 'Full Name'])->label(false) ?>

                <?= $form->field($model, 'email_contact')->textInput(['maxlength' => true, 'class' => 'size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1', 'placeholder' => 'Email'])->label(false) ?>

                <?= $form->field($model, 'subject_contact')->textInput(['maxlength' => true, 'class' => 'size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1', 'placeholder' => 'Subject'])->label(false) ?>

                <?= $form->field($model, 'message')->textarea(['rows' => 6, 'class' => 'size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1', 'placeholder' => 'Message'])->label(false) ?>


                <?php if (!Yii::$app->request->isAjax) { ?>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15' : 'size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15']) ?>
                </div>
                <?php 
            } ?>

                <?php ActiveForm::end(); ?>
            </div>

            <div class="col-sm-10 col-md-6 p-b-60">
                <div class="p-l-30 p-l-0-sr767">
                    <h3 class="t1-m-5 cl-3 m-b-38">
                        Contact Info
                    </h3>

                    <p class="t1-s-2 cl-6 m-b-9">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adi pisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>

                    <ul class="p-t-11">
                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                Jl. Kesala Perum Grand Aliza No. 5 B
                                Paulan, Colomadu, Karanganyar, Surakarta.
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                contact@bcyearbook.net
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                (+62) 813 2678 7846
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<div class="map">
    <!-- <div class="contact-map size-h-4" id="google_map" data-map-x="40.748910" data-map-y="-74.401956" data-scrollwhell="0" data-draggable="1" data-zoom="16" data-pin="images/icons/pin-map.png">

</div> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8334802671901!2d110.75263722915872!3d-7.538513270146493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1485cd8ddd1f%3A0x88ed8e5fc5a28252!2sUnnamed+Road%2C+Sanggir+Lor%2C+Paulan%2C+Colomadu%2C+Karanganyar+Regency%2C+Central+Java+57176!5e0!3m2!1sid!2sid!4v1552404116208" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> 