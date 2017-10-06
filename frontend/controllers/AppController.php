<?php
/**
 * Created by PhpStorm.
 * User: utkir
 * Date: 06.10.2017
 * Time: 1:15
 */

namespace frontend\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public $title_title='hello';
    public  function setMeta($title=null,$keywords=null,$description=null)
    {

        $this->view->title=$title;
        $this->view->registerMetaTag(['name'=>'keywords','content'=>$keywords]);
        $this->view->registerMetaTag(['name'=>'description','content'=>$description]);

    }

}