<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property integer $id
 * @property integer $guide_id
 * @property string $name
 * @property string $description
 * @property double $cost
 * @property double $avg_rating
 * @property string $status
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tours';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guide_id'], 'integer'],
            [['description', 'status'], 'string'],
            [['cost', 'avg_rating'], 'number'],
            [['name'], 'string', 'max' => 45],
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
            'name' => 'Name',
            'description' => 'Description',
            'cost' => 'Cost',
            'avg_rating' => 'Avg Rating',
            'status' => 'Status',
        ];
    }
}
