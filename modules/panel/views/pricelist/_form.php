<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use marqu3s\summernote\summernote;
use yii\helpers\Url;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model app\models\Pricelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_pricelist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_pricelist')->widget(MaskMoney::classname(), [
        'pluginOptions' => [
            'prefix' => 'Rp ',
            'suffix' => '',
            'precision' => 0,
            'thousands' => '.',
            'decimal' => ',',
            'allowNegative' => true

        ]
    ]) ?>

    <?= $form->field($model, 'description_pricelist')->widget(Summernote::className(), [
        //'id' => 'description',
        'clientOptions' => [
            "airMode" => false,

        ],

    ]); ?>

    <?= $form->field($model, 'image_pricelist')->widget(FileInput::classname(), [
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
                $model->image_pricelist ? Html::img(Yii::$app->urlManager->createAbsoluteUrl(['files/img/pricelist/' . $model->image_pricelist]), ['class' => 'file-preview-image kv-preview-data']) : null, // checks the models to display the preview
            ],
            'initialPreviewConfig' => [
                ['caption' => $model->image_pricelist, 'size' => ''],
            ],
            'overwriteInitial' => true,
            'maxFileSize' => 1000000,
        ],
    ]); ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php 
} ?>

    <?php ActiveForm::end(); ?> 