<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TAM Consulting',
	// user language (for Locale)
    'language'=>'es_PE',
    //language for messages and views
    'sourceLanguage'=>'es_PE',

    // charset to use
    'charset'=>'utf-8',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.mailer.EMailer',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
		// desactiva el autocargado de jquery-jqueryui por Yii y setea que los scripts
		// cargados por yii esten el head
		'clientScript'=>array(
	        'class' => 'CClientScript',
	        'scriptMap' => array(
	        	'jquery.js'=>false,
	        	'jquery.ui.js' => false,
	        ),
	        'coreScriptPosition' => CClientScript::POS_HEAD,
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'class'=>'UrlManager',
			'urlFormat'=>'path',
			'rules'=>array(
				''=>'site/index',
				'<controller:\w+>/'=>'<controller>/index',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
			),
			'showScriptName'=>false,
		),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		// Configuracion para extension YiiMail
		'mailer' => array(
        	'class' => 'application.extensions.mailer.EMailer',
			'pathViews' => 'application.views._email',
			'pathLayouts' => 'application.views._email.layouts',
        ),
		//Configuracion para componente SendMail (componente propio de la app)
        'emailSender'=>array(
	        'class'=>'SendMail',
	        'authEmail'=>'desarrollo.tam@gmail.com',
	        'authPwd'=>'desarrollo-',
	        'host'=>'smtp.gmail.com',
	        'port'=>587,
	        'smtpSecure'=>'tls',
	    ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'config' => array(
			'global' => array(
				'nombreEmpresa' => 'TAM Consulting',
				'webEmpresa' => 'http://www.tam-c.com/'
			),
			'email' => array(
				'adminEmail' => 'bmatos@tam-c.com',
				'contactEmail' => 'Informes@tam-c.com',
				'contactNameFrom' => 'Contacto TAM Consulting'
			)
		),
	),
);