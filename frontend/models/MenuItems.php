<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "menu_items".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $name
 * @property string $title
 * @property string $alias
 * @property string $description
 * @property string $keywords
 * @property string $link
 */
class MenuItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_items';
    }

    /**
     * @inheritdoc
     */
    public function getMenuItems(){
        return $this->hasOne(Menu::className(),['id'=>'parent']);
    }
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['name'], 'required'],
            [['description', 'keywords'], 'string'],
            [['name', 'title', 'alias', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent' => 'Parent',
            'name' => 'Name',
            'title' => 'Title',
            'alias' => 'Alias',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'link' => 'Link',
        ];
    }
}
