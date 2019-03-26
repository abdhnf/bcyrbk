<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="error-code">
    <?php
    if ($name == 'Not Found (#404)') {
        echo '404';
    } elseif ($name == 'Bad Request (#400)') {
        echo '400';
    } else {
        echo '500';
    }
    ?>
</div>
<div class="error-title"><?= nl2br(Html::encode($message)) ?></div>
<a href="index" class="btn btn-rounded">Main page</a> 