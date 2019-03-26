<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "gallery_yearbook".
 *
 * @property string $id_gallery_yearbook
 * @property string $image_gallery_yearbook
 * @property string $id_yearbook
 *
 * @property Yearbook $yearbook
 */
class GalleryYearbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'gallery_yearbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_yearbook'], 'required'],
            [['image_gallery_yearbook'], 'string', 'max' => 20],
            [['image_gallery_yearbook'], 'file', 'skipOnEmpty' => true, 'extensions' => ['jpg', 'jpeg', 'png'], 'maxFiles' => 10],
            [['id_yearbook'], 'string', 'max' => 8],
            [['id_gallery_yearbook'], 'unique'],
            [['id_yearbook'], 'exist', 'skipOnError' => true, 'targetClass' => Yearbook::className(), 'targetAttribute' => ['id_yearbook' => 'id_yearbook']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gallery_yearbook' => 'Id Gallery Yearbook',
            'image_gallery_yearbook' => 'Image Gallery Yearbook',
            'id_yearbook' => 'Id Yearbook',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYearbook()
    {
        return $this->hasOne(Yearbook::className(), ['id_yearbook' => 'id_yearbook']);
    }
}
