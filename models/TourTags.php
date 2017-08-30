<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour_tags".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property integer $tour_id
 */
class TourTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'tour_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_id' => 'Tag ID',
            'tour_id' => 'Tour ID',
        ];
    }
}
