<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guides".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $image_url
 * @property string $short_bio
 * @property double $avg_rating
 * @property double $latitude
 * @property double $longtitude
 * @property string $status
 */
class Guides extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guides';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname'], 'required'],
            [['image_url', 'short_bio', 'status'], 'string'],
            [['avg_rating', 'latitude', 'longtitude'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['surname'], 'string', 'max' => 45],
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
            'image_url' => 'Image Url',
            'short_bio' => 'Short Bio',
            'avg_rating' => 'Avg Rating',
            'latitude' => 'Latitude',
            'longtitude' => 'Longtitude',
            'status' => 'Status',
        ];
    }
}
