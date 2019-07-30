<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller {

	public function actionIndex() 
	{
		$users = Users:: find() -> all();
		//print_r($users);

		return $this->render('index',['users'=>$users]);

 
	}

	public function actionInsert()
	{
      $model = new Users();
	  $model->username = 'user2';
      $model->setPassword('password');
      $model->generateAuthKey();
      $model->generatePasswordResetToken();
      $model->save(); 
	}



} 