<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_tags".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property integer $user_id
 */
class UserTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'user_id'], 'integer'],
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
            'user_id' => 'User ID',
        ];
    }
}
