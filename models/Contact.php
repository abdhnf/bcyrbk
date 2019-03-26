<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id_contact
 * @property string $full_name
 * @property string $email_contact
 * @property string $subject_contact
 * @property string $message
 * @property string $type
 * @property string $create_contact
 * @property string $update_contact
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email_contact', 'subject_contact', 'message', 'type', 'create_contact', 'update_contact'], 'required'],
            [['message'], 'string'],
            [['create_contact', 'update_contact'], 'safe'],
            [['full_name', 'email_contact', 'subject_contact'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_contact' => 'Id Contact',
            'full_name' => 'Full Name',
            'email_contact' => 'Email',
            'subject_contact' => 'Subject',
            'message' => 'Message',
            'type' => 'Type',
            'create_contact' => 'Create Contact',
            'update_contact' => 'Update Contact',
        ];
    }
}
