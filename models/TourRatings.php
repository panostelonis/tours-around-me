<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour_ratings".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property integer $user_id
 * @property integer $score
 * @property string $comments
 */
class TourRatings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour_ratings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'user_id', 'score'], 'integer'],
            [['comments'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_id' => 'Tour ID',
            'user_id' => 'User ID',
            'score' => 'Score',
            'comments' => 'Comments',
        ];
    }
}
