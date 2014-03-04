<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p><?php echo Yii::t('gen','welcome.msg'); ?></p>

<div ng-view>
Cerca: <input ng-model="query">
<ul>
  <li ng-repeat="photo in photos | filter:query | orderBy:'description'">
    <p>
    {{photo.description}}
    </p>
  </li>
</ul>



<div>
La somma di 12 e 13 &egrave; uguale a {{12+13}}
</div>
</div>


<div>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
</div>


<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>





</div>