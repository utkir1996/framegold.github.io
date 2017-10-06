<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property integer $like
 * @property string $content
 * @property integer $comments
 * @property integer $share
 * @property integer $category_id
 * @property integer $author_id
 * @property string $publish_status
 * @property string $publish_date
 * @property string $image
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }
     public function getBlogCategory()
    {
        return $this->hasOne( BlogCategory::className() , ['id' => 'caetgory_id'] );
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'publish_status', 'image'], 'required'],
            [['like', 'comments', 'share', 'category_id', 'author_id'], 'integer'],
            [['content', 'publish_status'], 'string'],
            [['publish_date'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'like' => 'Like',
            'content' => 'Content',
            'comments' => 'Comments',
            'share' => 'Share',
            'category_id' => 'Category ID',
            'author_id' => 'Author ID',
            'publish_status' => 'Publish Status',
            'publish_date' => 'Publish Date',
            'image' => 'Image',
        ];
    }
}
