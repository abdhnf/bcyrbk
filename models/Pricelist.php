<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pricelist".
 *
 * @property string $id_pricelist
 * @property string $name_pricelist
 * @property string $cost_pricelist
 * @property string $description_pricelist
 * @property string $image_pricelist
 */
class Pricelist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'pricelist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pricelist', 'name_pricelist', 'cost_pricelist', 'description_pricelist'], 'required'],
            [['description_pricelist'], 'string'],
            [['id_pricelist'], 'string', 'max' => 5],
            [['name_pricelist'], 'string', 'max' => 100],
            [['cost_pricelist'], 'string', 'max' => 20],
            [['image_pricelist'], 'string', 'max' => 50],
            [['image_pricelist'], 'file', 'skipOnEmpty' => true, 'extensions' => ['jpg', 'jpeg', 'png']],
            [['id_pricelist'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pricelist' => 'Id Pricelist',
            'name_pricelist' => 'Name Pricelist',
            'cost_pricelist' => 'Cost Pricelist',
            'description_pricelist' => 'Description Pricelist',
            'image_pricelist' => 'Image Pricelist',
        ];
    }
}
