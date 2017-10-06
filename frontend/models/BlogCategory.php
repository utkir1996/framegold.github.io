<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog_category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $parent
 * @property string $alias
 * @property string $description
 * @property string $content
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_category';
    }
    
      public function getBlog()
    {
        return $this->hasMany( Blog::className() , ['category_id' => 'id'] );
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'parent', 'alias'], 'required'],
            [['parent'], 'integer'],
            [['title', 'alias', 'description', 'content'], 'string', 'max' => 255],
            [['alias'], 'unique'],
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
            'parent' => 'Parent',
            'alias' => 'Alias',
            'description' => 'Description',
            'content' => 'Content',
        ];
    }
}
