<?php

namespace app\components;

use frontend\models\Products;
use yii\base\Widget;

class  ColorWidgets extends Widget{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
    public $colorStyle='';

    public function init()
    {
        parent::init();

        if($this->tpl === null)
        {
            $this->tpl = 'color';
        }

        $this->tpl.= '.php';

    }



    public function run()    {
        $this->menuHtml='
             <aside class="widget widget-color box-shadow mb-30">
                <h6 class="widget-title border-left mb-20">color</h6>
                   <ul>';

        $this->data = Products::find()->indexBy('color')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml.= $this->getMenuHtml($this->tree);

        $this->menuHtml.='
                  </ul>
             </aside>';

        $this->menuHtml.='<style>'.$this->colorStyle.'</style>';

        return $this->menuHtml;
    }

    protected function getTree(){

        $tree = [];

        if(!empty($this->data)):

       foreach ($this->data as $product)
       {
           $count_color=[];
           if($product['color'])
           {
            $count_color[$product['color_name']]++;

           }
           sort($count_color);
       }

       //if(!empty($count_color)):

       foreach ($this->data as $product)
       {
            if($product['color']){
                $tree[$product['color_name']]['color'] = $product['color'];
                $tree[$product['color_name']]['color_name'] = $product['color_name'];
                $tree[$product['color_name']]['id'] = $product['id'];
            }
        }

        //endif;
        endif;

        return $tree;

    }



    protected  function getMenuHtml($tree){
        $str = '';
        if(!empty($tree)):
        foreach ($tree as $color) {
            $str .= $this->colorToTemplate($color);        }
        endif;

            return $str;

    }


    protected function colorToTemplate($color){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();  }
}?>