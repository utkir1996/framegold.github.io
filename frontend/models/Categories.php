<?php

namespace frontend\models;

use Yii;
use frontend\models\Products;
/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $title
 * @property string $parent
 * @property string $alias
 * @property string $description
 * @property string $content
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }
    public function getProducts()
    {
        return $this->hasMany( Products::className() , ['parent' => 'id'] );
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'parent', 'alias','img_src'], 'required'],
            [['parent'], 'integer'],
            [['title', 'alias', 'description', 'content','img_src'], 'string', 'max' => 255],
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
