<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $password
 * @property double $latitude
 * @property double $longtitude
 * @property string $token
 * @property string $last_updated
 * @property string $facebook_id
 * @property string $gender
 * @property string $birth_date
 * @property string $img_url
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitude', 'longtitude'], 'number'],
            [['last_updated', 'birth_date'], 'safe'],
            [['gender', 'img_url'], 'string'],
            [['name'], 'string', 'max' => 30],
            [['surname', 'email', 'password', 'token', 'facebook_id'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'password' => 'Password',
            'latitude' => 'Latitude',
            'longtitude' => 'Longtitude',
            'token' => 'Token',
            'last_updated' => 'Last Updated',
            'facebook_id' => 'Facebook ID',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'img_url' => 'Img Url',
        ];
    }
}
