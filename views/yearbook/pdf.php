<?php
$this->title = 'Yearbook Detail #' . $model->name_yearbook;
?>

<?= \yii2assets\pdfjs\PdfJs::widget([
    'width' => '100%',
    'height' => '100%',
    'url' => Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook])
]); ?> 