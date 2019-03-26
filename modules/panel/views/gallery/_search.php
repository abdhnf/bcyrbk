<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchGalleryYearbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-yearbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_gallery_yearbook') ?>

    <?= $form->field($model, 'image_gallery_yearbook') ?>

    <?= $form->field($model, 'id_yearbook') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
