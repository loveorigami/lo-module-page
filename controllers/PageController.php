<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:01 PM
 */

namespace lo\modules\page\controllers;

use lo\modules\page\models\Page;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class PageController extends Controller
{
    public function actionView($slug){
        $model = Page::find()->where(['slug'=>$slug])->published()->one();
        if(!$model){
            throw new NotFoundHttpException(\Yii::t('frontend', 'Page not found'));
        }
        return $this->render('view', ['model'=>$model]);
    }
} 