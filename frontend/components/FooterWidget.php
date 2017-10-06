<?php

namespace app\components;

use frontend\models\MenuItems;
use yii\base\Widget;

class  FooterWidget extends Widget{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
    public $count= 1;
    public $clas;
    public $brandLabel;

    public function init()
    {    parent::init();
        if($this->tpl === null)
        { $this->tpl = 'sidebar';        }
        $this->tpl.= '.php';
    }

    public function Counts()
    {
          echo "<div class='{$this->clas}'>";
        echo   "<div class='single-footer'>";
        echo "<h4 class='footer-title border-left'>{$this->brandLabel}</h4>";
        echo " <ul class='footer-menu'>";
        echo $this->menuHtml;
        echo " </ul>
            </div>
            </div>";
    }


    public function run()    {
        $this->data = MenuItems::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        $this->Counts();
    }

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
        return $str;  }


    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();  }
}?>