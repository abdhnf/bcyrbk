<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryYearbook */
?>
<div class="gallery-yearbook-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_gallery_yearbook',
            'image_gallery_yearbook',
            'id_yearbook',
        ],
    ]) ?>

</div>
