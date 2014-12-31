<?php
/**
 * Created by PhpStorm.
 * User: FOCUS
 * Date: 2015/1/1
 * Time: 2:43
 */
namespace backend\controllers;

class NewsController extends BaseController{
	public function actionIndex(){
		return $this->render('index');
	}
}