<?php

namespace app\models;

use Yii;
use himiklab\sitemap\behaviors\SitemapBehavior;
use yii\helpers\Url;

/**
 * This is the model class for table "yearbook".
 *
 * @property string $id_yearbook
 * @property string $name_yearbook
 * @property string $address_yearbook
 * @property string $description_yearbook
 * @property string $thumbnail_yearbook
 * @property string $header_yearbook
 * @property string $file_yearbook
 */
class Yearbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'yearbook';
    }

    public function behaviors()
    {
        return [
            'sitemap' => [
                'class' => SitemapBehavior::className(),
                'scope' => function ($model) {
                    /** @var \yii\db\ActiveQuery $model */
                    $model->select(['id_yearbook', 'name_yearbook']);
                    //$model->andWhere(['is_deleted' => 0]);
                },
                'dataClosure' => function ($model) {
                    /** @var self $model */
                    return [
                        'loc' => Url::to(Yii::$app->request->baseUrl . '/yearbook/detail?id=' . $model->id_yearbook, true),
                        'title' => $model->name_yearbook,
                        'changefreq' => SitemapBehavior::CHANGEFREQ_DAILY,
                        'priority' => 0.8
                    ];
                }
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_yearbook', 'name_yearbook', 'address_yearbook', 'description_yearbook'], 'required'],
            [['id_yearbook'], 'string', 'max' => 8],
            [['name_yearbook', 'address_yearbook'], 'string', 'max' => 100],
            // [['description_yearbook'], 'string', 'max' => 200],
            [['thumbnail_yearbook', 'header_yearbook', 'file_yearbook'], 'string', 'max' => 50],
            [['thumbnail_yearbook', 'header_yearbook'], 'file', 'skipOnEmpty' => true, 'extensions' => ['jpg', 'jpeg', 'png']],
            [['file_yearbook'], 'file', 'skipOnEmpty' => true, 'extensions' => ['pdf']],
            [['id_yearbook'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_yearbook' => 'Id Yearbook',
            'name_yearbook' => 'Name Yearbook',
            'address_yearbook' => 'Address Yearbook',
            'description_yearbook' => 'Description Yearbook',
            'thumbnail_yearbook' => 'Thumbnail Yearbook',
            'header_yearbook' => 'Header Yearbook',
            'file_yearbook' => 'File Yearbook',
        ];
    }
}
