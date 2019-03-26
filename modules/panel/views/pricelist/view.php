<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pricelist */
?>
<div class="pricelist-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pricelist',
            'name_pricelist',
            'cost_pricelist',
            'description_pricelist:ntext',
            'image_pricelist',
        ],
    ]) ?>

</div>
