<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $guide_id
 * @property integer $tour_id
 * @property double $cost
 * @property string $status
 * @property string $started
 * @property string $completed
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'guide_id', 'tour_id'], 'integer'],
            [['cost'], 'number'],
            [['status'], 'string'],
            [['started', 'completed'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'guide_id' => 'Guide ID',
            'tour_id' => 'Tour ID',
            'cost' => 'Cost',
            'status' => 'Status',
            'started' => 'Started',
            'completed' => 'Completed',
        ];
    }
}
