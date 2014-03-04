<?php
$this->widget(
		'bootstrap.widgets.TbNavbar',
		array('brand' => false,
				'fixed' => false,
				'items' => array(
						array(
								'class' => 'bootstrap.widgets.TbMenu',
								'items' => array(
										array('label' => 'Home', 'url'=>array('/site/index')),
										array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
										array('label' => 'Manage users', 'visible'=>!Yii::app()->user->isGuest,
												'items'=>array(
														array('label'=>'User list', 'url'=>array('/user/index')),
														array('label'=>'Most Popular', 'url'=>array('product/index')),
												)
										),
										array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
										array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
										array('label'=>'Contact', 'url'=>array('/site/contact'))
								)
						)
				)
		)
);
?>
