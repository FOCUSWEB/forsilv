<?php

namespace frontend\controllers;

class HomeController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout(){
        return $this->render('about');
    }

    public function actionContact(){
        return $this->render('contact');
    }
}
