<?php
use yii\helpers\Url;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    //     [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'id_yearbook',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name_yearbook',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'address_yearbook',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'description_yearbook',
        'value'=>function($data){
            return substr($data->description_yearbook,0,50);
        },
        'format'=>'raw',
    ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'thumbnail_yearbook',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'header_yearbook',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'file_yearbook',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'width' => '250px',
        'template' => '{qrcode} {gallery} {view} {update} {delete}',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'buttons' => [
            'qrcode' => function ($url, $model) {
                return Html::button('<span class="fa fa-qrcode"></span>', ['href'=> $url,
                    'role'=>'modal-remote',
                    'class' => 'btn btn-info btn-xs',
                    'id'=>'btnView',
                    'title'=>'Qrcode']);
            },
            'gallery' => function ($url, $model) {
                return Html::button('<span class="fa fa-image"></span>', ['href'=> $url,
                    'role'=>'modal-remote',
                    'class' => 'btn btn-warning btn-xs',
                    'id'=>'btnView',
                    'title'=>'Gallery']);
            },
            'view' => function ($url, $model) {
                return Html::button('<span class="fa fa-search"></span>', ['href'=> $url,
                    'role'=>'modal-remote',
                    'class' => 'btn btn-primary btn-xs',
                    'id'=>'btnView',
                    'title'=>'Detail']);
            },
            'update' => function ($url, $model) {
                return Html::button('<span class="fa fa-pencil"></span>', ['href'=> $url,
                    'role'=>'modal-remote',
                    'class' => 'btn btn-success btn-xs',
                    'id'=>'btnEdit',
                    'title'=>'Edit']);
            },
            'delete' => function ($url, $model) {
                return Html::a('<span class="fa fa-trash"></span>', $url, [
                    'title' => 'Hapus',
                    'class'=>'btn btn-danger btn-xs',
                    'data-pjax'=>'0',
                    'data-method'=>'post',
                    'data-confirm'=>'Apakah anda setuju akan menghapus item ini?',                                  
                ]);
            },
        ],
        // 'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        // 'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        // 'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
        //                   'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
        //                   'data-request-method'=>'post',
        //                   'data-toggle'=>'tooltip',
        //                   'data-confirm-title'=>'Are you sure?',
        //                   'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   