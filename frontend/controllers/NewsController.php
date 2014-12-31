<?php

namespace frontend\controllers;

class NewsController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
