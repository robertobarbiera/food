<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html ng-app="foodApp" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/angular.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/angular-route.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/CompanyCtrl.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foodApp.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	
	<div id="header"><!-- header -->
		<?php include("inc/header.php"); ?>
	</div>
	<div><!-- mainmenu -->
		<?php include("inc/menu.php"); ?>
	</div>
	<?php include("inc/breadcrumbs.php"); ?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
	    <?php include("inc/footer.php"); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
