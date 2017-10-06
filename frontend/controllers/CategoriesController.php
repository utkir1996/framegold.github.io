<?php

/**

 * Created by PhpStorm.

 * User: user

 * Date: 08.09.2017

 * Time: 12:32

 */

namespace frontend\controllers;

use frontend\models\Categories;
use frontend\models\Products;

use yii\web\Controller;
use yii\data\Pagination;

class CategoriesController extends AppController

{
public function actionIndex(){
    $this->setMeta('Subash | Categories');

    $page_title='Categories';
    $page_subtitle='Categories';

    $query=Products::find()->orderBy(['id'=>SORT_ASC]);
    // делаем копию выборки
    $countQuery =clone $query;
    // подключаем класс Pagination, выводим по 10 пунктов на страницу
    $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
    // приводим параметры в ссылке к ЧПУ
    $pages->pageSizeParam = false;
    $pages->forcePageParam=false;
    $products= $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
    //
    //$products=Products::find()->all();

    return $this->render('index',compact(['products','pages','page_title','page_subtitle']));
}

    public function actionView($id)
    {

        $id=\Yii::$app->request->get('id');

        /*$products=Products::find()->where(['parent'=>$id])->all();*/
        $query = Products::find()->with('categories')->where(['parent'=>$id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $pages->pageSizeParam = false;
        $pages->forcePageParam=false;

        $products= $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();



        $category_title=Categories::findOne($id);
        $this->setMeta('Subash | '.$category_title->title);
        $page_title=$category_title->title;
        $page_subtitle=$category_title->title;
        return $this->render('view',compact(['products','pages','page_title','page_subtitle']));



    }



}