<?php

namespace app\components;

use frontend\models\Categories;
use frontend\models\BlogCategory;
use frontend\models\MenuItems;
use frontend\models\Products;
use yii\base\Widget;

class MyWidget extends Widget{
    public $tpl;
    public $modelName;
    public $data;
    public $tree;
    public $menuHtml;
    public $count=0;
    public $limit=0;
    


    public function init()
    {        parent::init();
    if($this->tpl === null)
    { $this->tpl = 'sidebar';        }
    $this->tpl.= '.php';
    
    if($this->modelName===null){
        $this->modelName=Categories::find();
    }
    else{
        
    $this->modelName=$this->switchModel($this->modelName);
    
        
    }
    }

    public function run()    {
    
        
        $this->data = $this->modelName->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        return $this->menuHtml;    }

        protected function getTree(){

        $tree = [];

        foreach ($this->data as $id=>&$node){
            if(!$node['parent'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent']]['childs'][$node['id']] = &$node;    }
                return $tree;       }



                protected  function getMenuHtml($tree){
            $str = '';       foreach ($tree as $category) {
                $str .= $this->catToTemplate($category);        }
                return $str;   }


protected function catToTemplate($category)
{
                    ob_start();
                    include __DIR__ . '/category_tpl/' . $this->tpl;
                    return ob_get_clean();    
    
}
    
protected function switchModel($model)
{

switch($model)
{
 
 case 'Categories': $model=Categories::find(); break;
 
 case 'BlogCategory': $model=BlogCategory::find(); break;
 
 
 default:$model=Categories::find();
 
    
}


return $model;

}

    
    
    
    
    
}
                    
                    
                    ?>