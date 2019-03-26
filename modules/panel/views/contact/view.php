<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
?>
<div class="contact-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_contact',
            'full_name',
            'email_contact:email',
            'subject_contact',
            'message:ntext',
            'type',
            'create_contact',
            'update_contact',
        ],
    ]) ?>

</div> 