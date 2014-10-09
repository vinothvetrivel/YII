<?php
/* @var $this HelloMessageController */

/*$this->breadcrumbs=array(
	'Hello Message'=>array('/helloMessage'),
	'Hello',
);*/
?><!--
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>-->

<h1>Hello World!</h1>
<h3><?php echo $this->_time; ?></h3>

<p><?php echo CHtml::link('Click here to goto Bye',array('helloMessage/bye')); ?></p>

	