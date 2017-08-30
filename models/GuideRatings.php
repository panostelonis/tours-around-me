<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guide_ratings".
 *
 * @property integer $id
 * @property integer $guide_id
 * @property integer $user_id
 * @property integer $score
 * @property string $comments
 */
class GuideRatings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guide_ratings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guide_id', 'user_id', 'score'], 'integer'],
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
            'guide_id' => 'Guide ID',
            'user_id' => 'User ID',
            'score' => 'Score',
            'comments' => 'Comments',
        ];
    }
}
