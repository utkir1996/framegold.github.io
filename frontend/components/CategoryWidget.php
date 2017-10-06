<?php

namespace app\components;

use frontend\models\Categories;
use frontend\models\BlogCategory;
use frontend\models\MenuItems;
use frontend\models\Products;
use yii\base\Widget;

class CategoryWidget extends Widget{
    public $tpl;
    public $ModelName;
    public $data;
    public $tree;
    public $menuHtml;
    public $count=0;
    public $limit=0;
    public $BeforeLi=[];
    public $a=[];
    public $LiOpen=[];
    public $LiClose=[];
    


    public function init()
    {
    parent::init();
    if($this->tpl === null)
    { 
        $this->tpl = 'ProductsLeftSidebar';
    }
    
    $this->tpl.= '.php';
    
    if($this->ModelName===null)
    {
        $this->ModelName=Categories::find();
    }
    else{
        
    $this->ModelName=$this->switchModel($this->ModelName);
    
        }
        
    }

    public function run()    
    {
    
        $this->menuHtml.=$this->BeforeLi($this->BeforeLi);

        $this->data = $this->ModelName->indexBy('id')->asArray()->all();
        
        $this->tree = $this->getTree();
        
        $this->menuHtml.= $this->getMenuHtml($this->tree);
        
        $this->menuHtml.=$this->AfterLi($this->BeforeLi);
        
        return $this->menuHtml;    
        
    }

    protected function getTree()
    {

        $tree = [];

        foreach ($this->data as $id=>&$node)
        {
            if(!$node['parent']) $tree[$id] = &$node;
            
            else
                $this->data[$node['parent']]['childs'][$node['id']] = &$node;    
            
        }
                return $tree;       
            
    }



    protected  function getMenuHtml($tree)
    {
       $str = '';       
       
       foreach ($tree as $category)
       {
                $str .= $this->catToTemplate($category);    
       }
    
       return $str;   
        
    }


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


    protected function BeforeLi($beforeLi=[])
    {
    
       if(empty($beforeLi)) return '';

        $tagsBegin='';

    
       foreach($beforeLi as $tag)
       {
        $tagsBegin.="\n<$tag[name] class='$tag[class]' id='$tag[id]' $tag[otherAttrbutes] >";
        
        $tagsBegin.=$tag['text'];
        
        if(isset($tag['close'])&&$tag['close']==true) $tagsBegin.="</$tag[name]>\n";
        else
        {
        $tagsBegin.="\n";    
        }

        
        }
    
        return $tagsBegin;
        
    }
    
    protected function AfterLi($AfterLi=[])
    {
        if(empty($AfterLi)) return '';


        $tagsEnd='';
    
        foreach($AfterLi as $tag)
        {
      
        if(!isset($tag['close']) || $tag['close']==false) 
        {
         $tagsEnd="</$tag[name]>".$tagsEnd;   
        } 
        
    }
    
    
        return $tagsEnd;
        
    }  


    
    
    
    
    
    }
                    
?>