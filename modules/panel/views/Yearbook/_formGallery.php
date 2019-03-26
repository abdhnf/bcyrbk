<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Yearbook;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryYearbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-yearbook-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= FileInput::widget([
        'model' => $model,
        'attribute' => 'image_gallery_yearbook[]',
        'options' => [
            'multiple' => true,
            'accept' => ''
        ],
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-image"></i> ',
            'browseLabel' =>  'Select Image',
        ]
    ]); ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php 
} ?>

    <?php ActiveForm::end(); ?>

</div> 