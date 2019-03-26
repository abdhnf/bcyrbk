<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

// use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<form class="sign-box" action="<?= Yii::$app->request->baseUrl . '/login' ?>" method="post">
    <div class="sign-avatar">
        <img src="<?= Yii::$app->request->baseUrl . '/favicon.png' ?>" alt="">
    </div>
    <header class="sign-title">Sign In - BC Yearbook</header>
    <div class="form-group">
        <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" aria-required="true" aria-invalid="false" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" aria-required="true" aria-invalid="false" placeholder="Password">
    </div>
    <input type="hidden" value="" name="_csrf">
    <div class="form-group">
        <div class="float-right reset">
            <a href="#">Reset Password</a>
        </div>
    </div>
    <button type="submit" class="btn btn-rounded">Sign in</button>
    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
</form>

<?php
$script = <<< JS
$(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
JS;
$this->registerJs($script);
?> 