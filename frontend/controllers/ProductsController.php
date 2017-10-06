<?php

namespace frontend\controllers;

use frontend\models\Products;
use yii\data\Pagination;
use Yii;


class ProductsController extends AppController
{


    public function actionIndex()
    {
        /*this is for meta teg title, keywords, description*/
        $this->setMeta('Subash | Products');

        //this for page title vars $page_title,$page_subtitle
        $page_title='Products';
        $page_subtitle='Products grid view';

        // query for products sort (1,2,3,4,5 ...)
        $query=Products::find()->orderBy(['id'=>SORT_ASC]);

        // copy from query for products
        $countQuery =clone $query;


        // pagination for products
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);

        // parametr pagination
        $pages->pageSizeParam = false;
        $pages->forcePageParam=false;

        //join pagination and query for products
        $products= $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        // return products/index vars $products,$pages
        return $this->render('index',compact(['products','pages','page_title','page_subtitle']));

    }

    public function actionModal($id)
    {

        //get $_GET['id']
        $id=Yii::$app->request->get('id');

        // find one product where id=$id
         $product=Products::findOne($id);

         //theme layout false (header,footer=false)
         $this->layout=false;

         //return modal
        return $this->render('modal',compact(['product']));
    }

    public function actionSearch($s)
    {
        //get $_GET['s']
        $s=Yii::$app->request->get('s');

        /*this is for meta teg title, keywords, description*/
        $this->setMeta('Search | '.$s);

        // check $_GET['s']
      if(!empty($s)) :


          $page_title='Your Search '.$s;
          $page_subtitle='Search';

          // query to base name begin $s
        $query = Products::find()->where(['like', 'name', $s]);

        // copy from query for products
        $countQuery = clone $query;

        // pagination for products
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);

        // parametr pagination
        $pages->pageSizeParam = false;
        $pages->forcePageParam = false;

        //join pagination and query for products
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        //return product/index vars $products,$pages
        return $this->render('index',compact(['products','pages','page_title','page_subtitle']));

      endif;

        // redirect products/index because empty($_GET['s'])
        return $this->redirect(['/products/index']);
    }

    public function actionColorsearch($c)
    {

        // get $_GET['c']
        $c=Yii::$app->request->get('c');

        /*this is for meta teg title, keywords, description*/
        $this->setMeta('Search | '.$c);

        $page_title='Your Search '.$c;
        $page_subtitle='Search';

        //check $_GET['c']
        if(!empty($c)) :

        // query for products where colorname=$c
        $query=Products::find()->where(['like','color_name',$c]);

        //copy from query
        $countQuery =clone $query;


        // pagination for products
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);

        // pagination parametr
        $pages->pageSizeParam = false;
        $pages->forcePageParam=false;

        //join products and pagination
        $products= $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        //return products/index vars $products,$pages
        return $this->render('index',compact(['products','pages','page_title','page_subtitle']));

        endif;

        // redirect products/index because empty($_GET['c'])
        return $this->redirect(['/products/index']);
    }
    
    public function actionView($id)
    {

        //get $_GET['id']
        $id=Yii::$app->request->get('id');

        //check $id     //redirect products/index because not isset($_GET['id'])
        if(!isset($id)) return $this->redirect(['/product/index']);


        //query to base where id=$_GET['id'] only once
        $view_plus=Products::findOne($id);

        $view_plus->parent=1;

        $view_plus->save();

        $product=Products::findOne($id);

        /*this is for meta teg title, keywords, description*/
        $this->setMeta($product->name,'',$product->description);

        $page_title=$product->name;
        $page_subtitle=$product->name;

        //return products/view vars $product
        return $this->render('view',compact(['product','page_title','page_subtitle']));
        
    }


}

