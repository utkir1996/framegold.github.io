<?php

namespace frontend\controllers;
use frontend\models\Blog;
use yii\data\Pagination;
use Yii;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query=Blog::find()->orderBy(['id'=>SORT_ASC]);
        // делаем копию выборки
        $countQuery =clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $blogpages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        // приводим параметры в ссылке к ЧПУ
        $blogpages->pageSizeParam = false;
        $blogpages->forcePageParam=false;
        $posts= $query->offset($blogpages->offset)
            ->limit($blogpages->limit)
            ->all();
        return $this->render('index',compact(['posts','blogpages']));
    }
    public function actionSingle()
    {
        $id=Yii::$app->request->get('id');
        $singlepost = Blog::findOne($id);
        return $this->render('single',compact('singlepost'));
    }

}
