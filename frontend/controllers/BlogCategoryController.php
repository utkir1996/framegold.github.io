<?php

namespace frontend\controllers;
use frontend\models\BlogCategory;
use frontend\models\Blog;
use yii\data\Pagination;
use Yii;

class BlogCategoryController extends \yii\web\Controller
{
public function actionIndex(){

    $query=BLog::find()->orderBy(['id'=>SORT_ASC]);
    // делаем копию выборки
    $countQuery =clone $query;
    // подключаем класс Pagination, выводим по 10 пунктов на страницу
    $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
    // приводим параметры в ссылке к ЧПУ
    $pages->pageSizeParam = false;
    $pages->forcePageParam=false;
    $posts= $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
    //
    //$products=Products::find()->all();

    return $this->render('index',compact(['posts','pages']));
}

    public function actionView($id)
    {

        $id=\Yii::$app->request->get('id');

        /*$products=Products::find()->where(['parent'=>$id])->all();*/
        $query = Blog::find()->where(['parent'=>$id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $pages->pageSizeParam = false;
        $pages->forcePageParam=false;

        $post= $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('view',compact(['post','pages']));



    }

}
