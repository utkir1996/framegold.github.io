<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $alias
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function getMenu()
    {
        return $this->hasMany( MenuItems::className() , ['parent' => 'id'] );
    }
    public function rules()
    {
        return [
            [['name', 'title', 'alias'], 'required'],
            [['name', 'title', 'alias'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'alias' => 'Alias',
        ];
    }
}
