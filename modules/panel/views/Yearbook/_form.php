<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
use marqu3s\summernote\summernote;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Yearbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yearbook-form">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_VERTICAL
    ]); ?>
    <!-- <div class = "row">
        <div class = "col-md-6">

        </div>
    </div> -->
    <?= $form->field($model, 'name_yearbook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_yearbook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_yearbook')->widget(Summernote::className(), [
        //'id' => 'description',
        'clientOptions' => [
            "airMode" => false,

        ],

    ]); ?>

    <?= $form->field($model, 'thumbnail_yearbook')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'multiple' => false,
            'allowedFileExtensions' => ['jpeg', 'jpg', 'gif', 'png', 'bmp'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-camera"></i> ',
            'browseLabel' =>  'Select Thumbnail',
            'initialPreview' => [
                $model->thumbnail_yearbook ? Html::img(Yii::$app->urlManager->createAbsoluteUrl(['files/img/thumbnail/' . $model->thumbnail_yearbook]), ['class' => 'file-preview-image kv-preview-data']) : null, // checks the models to display the preview
            ],
            'initialPreviewConfig' => [
                ['caption' => $model->thumbnail_yearbook, 'size' => ''],
            ],
            'overwriteInitial' => true,
            //'maxFileSize' => 1000000,
        ],
    ]); ?>

    <?= $form->field($model, 'header_yearbook')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'multiple' => false,
            'allowedFileExtensions' => ['jpeg', 'jpg', 'gif', 'png', 'bmp'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-camera"></i> ',
            'browseLabel' =>  'Select Header',
            'initialPreview' => [
                $model->header_yearbook ? Html::img(Yii::$app->urlManager->createAbsoluteUrl(['files/img/header/' . $model->header_yearbook]), ['class' => 'file-preview-image kv-preview-data']) : null, // checks the models to display the preview
            ],
            'initialPreviewConfig' => [
                ['caption' => $model->header_yearbook, 'size' => ''],
            ],
            'overwriteInitial' => true,
            //'maxFileSize' => 1000000,
        ],
    ]); ?>

    <?php if (!$model->isNewRecord) { ?>
    <?= $form->field($model, 'file_yearbook')->widget(FileInput::classname(), [
        'options' => ['accept' => 'application/pdf'],
        'pluginOptions' => [
            'multiple' => false,
            'allowedFileExtensions' => ['pdf'],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => true,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            //'removeClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-file-pdf"></i> ',
            'browseLabel' =>  'Select File Pdf',
            'initialPreview' => [
                '<embed class="kv-preview-data file-preview-pdf" src="' . Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook]) . '" type="application/pdf" style="width:100%;height:160px;" internalinstanceid="90">',
            ],
            'initialPreviewConfig' => [
                ['type' => 'pdf', 'caption' => $model->file_yearbook, 'size' => ''],
            ],
            'overwriteInitial' => true,
            //'maxFileSize' => 1000000,
        ],
    ]); ?>
    <?php 
} else { ?>
    <?= $form->field($model, 'file_yearbook')->widget(FileInput::classname(), [
        'options' => ['id' => 'input_pdf', 'accept' => 'application/pdf'],
        'pluginOptions' => [
            'multiple' => false,
            'allowedFileExtensions' => ['pdf'],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => true,
            'showUpload' => false,
            //'mainClass' => '',
            //'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-file-pdf"></i> ',
            'browseLabel' =>  'Select File Pdf',
            // 'initialPreview' => [
            //     $model->file_yearbook ? Html::img(Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook]), ['class' => 'kv-preview-data file-preview-pdf']) : null, // checks the models to display the preview
            // ],
            // 'initialPreviewConfig' => [
            //     ['caption' => $model->file_yearbook, 'size' => ''],
            // ],
            'overwriteInitial' => true,
            //'maxFileSize' => 1000000,
        ],
    ]); ?>
    <?php 
} ?>

    <?php if (!Yii::$app->request->isAjax) { ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php 
} ?>

    <?php ActiveForm::end(); ?>

</div> 