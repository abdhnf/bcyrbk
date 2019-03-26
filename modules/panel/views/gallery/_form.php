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

    <?= $form->field($model, 'id_yearbook')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Yearbook::find()->all(), 'id_yearbook', 'name_yearbook'),
        'language' => 'id',
        'options' => ['placeholder' => 'Select School', ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= FileInput::widget([
        'model' => $model,
        'attribute' => 'image_gallery_yearbook[]',
        'options' => [
            'multiple' => true,
            'showUpload' => false,
            'accept' => ''
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