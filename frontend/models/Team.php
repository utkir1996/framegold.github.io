<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $images
 * @property string $name
 * @property string $chairman
 * @property string $content
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images', 'name', 'chairman'], 'required'],
            [['content'], 'string'],
            [['images', 'name', 'chairman'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Images',
            'name' => 'Name',
            'chairman' => 'Chairman',
            'content' => 'Content',
        ];
    }
}
