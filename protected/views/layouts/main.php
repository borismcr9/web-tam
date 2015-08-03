<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="es"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js gt-ie9" lang="es"> <!--<![endif]-->
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="description" content="<?php echo $this->pageDescription; ?>"/>
	<meta name="language" content="es"/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->baseUrl; ?>/favicon.ico"/>
	<link rel="stylesheet" href="<?php echo $this->baseUrl; ?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo $this->baseUrl; ?>/css/main.min.css" />
	<script src="<?php echo $this->baseUrl; ?>/js/lib/modernizr.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseUrl; ?>/js/lib/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php echo $this->renderPartial('//layouts/header'); ?>
	<?php echo $content; ?>
	<?php echo $this->renderPartial('//layouts/footer'); ?>
	<script src="<?php echo $this->baseUrl; ?>/js/lib/jquery-1.11.0.min.js"></script>
	<script src="<?php echo $this->baseUrl; ?>/js/lib/bootstrap.min.js"></script>
	<script src="<?php echo $this->baseUrl; ?>/js/init.js"></script>
</body>
</html>