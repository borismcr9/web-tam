<?php

class SiteController extends BaseController
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->pageTitle .= ' | Tecnologìa a tu medida';
		$this->pageActive = 'Inicio';
		$this->pageDescription = 'TAM Consulting, empresa consultora de sistemas con mas de 10 años de experiencia brindando soluciones al alcance de nuestros clientes';
		$this->render('index');
	}

	public function actionQueNosHaceDiferentes()
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->pageTitle .= ' | Tecnologìa a tu medida';
		$this->pageActive = 'Inicio';
		$this->pageDescription = 'Conosca que nos hace diferentes frente a nuestros principales competidores.';
		$this->render('que-nos-hace-diferentes');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	// /**
	//  * Displays the contact page
	//  */
	// public function actionContact()
	// {
	// 	$model=new ContactForm;
	// 	if(isset($_POST['ContactForm']))
	// 	{
	// 		$model->attributes=$_POST['ContactForm'];
	// 		if($model->validate())
	// 		{
	// 			$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
	// 			$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
	// 			$headers="From: $name <{$model->email}>\r\n".
	// 				"Reply-To: {$model->email}\r\n".
	// 				"MIME-Version: 1.0\r\n".
	// 				"Content-Type: text/plain; charset=UTF-8";

	// 			mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
	// 			Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
	// 			$this->refresh();
	// 		}
	// 	}
	// 	$this->render('contact',array('model'=>$model));
	// }

	/**
	 * Displays the login page
	 */
	// public function actionLogin()
	// {
	// 	$model=new LoginForm;

	// 	// if it is ajax validation request
	// 	if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
	// 	{
	// 		echo CActiveForm::validate($model);
	// 		Yii::app()->end();
	// 	}

	// 	// collect user input data
	// 	if(isset($_POST['LoginForm']))
	// 	{
	// 		$model->attributes=$_POST['LoginForm'];
	// 		// validate user input and redirect to the previous page if valid
	// 		if($model->validate() && $model->login())
	// 			$this->redirect(Yii::app()->user->returnUrl);
	// 	}
	// 	// display the login form
	// 	$this->render('login',array('model'=>$model));
	// }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	// public function actionLogout()
	// {
	// 	Yii::app()->user->logout();
	// 	$this->redirect(Yii::app()->homeUrl);
	// }
}