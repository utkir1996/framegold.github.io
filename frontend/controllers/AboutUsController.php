<?php

namespace frontend\controllers;
use frontend\models\Team;
use yii\data\Pagination;
use Yii;

class AboutUsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $teams=Team::find()->all();
        return $this->render('index',compact(['teams']));
    }
    

}
?>