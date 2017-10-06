<?php

namespace frontend\models;

use Yii;
use frontend\models\Categories;
/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property integer $rating
 * @property integer $parent
 * @property string $price
 * @property string $img_src
 * @property string $color
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    public function getCategories(){
        return $this->hasOne(Categories::className(),['id'=>'parent']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'content', 'rating', 'parent','old_price', 'new_price', 'color','color_name','view','brand'], 'required'],
            [['content'], 'string'],
            [['rating', 'parent','view'], 'integer'],
            [['name', 'description', 'old_price','new_price', 'img_src', 'color','color_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'rating' => 'Rating',
            'parent' => 'Parent',
            'old_price'=>'Old Price',
            'new_price' => 'New Price',
            'img_src' => 'Img Src',
            'color' => 'Color',
            'color_name'=>'Color Name',
            'view'=>'View',
            'feature'=>'Feature',
            'brand'=>'Brand'
        ];
    }
}
