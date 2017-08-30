<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guide_tags".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property integer $guide_id
 */
class GuideTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guide_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'guide_id'], 'integer'],
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
            'guide_id' => 'Guide ID',
        ];
    }
}
