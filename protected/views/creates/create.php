<?php
/* @var $this CreatesController */
/* @var $model Creates */

//$this->breadcrumbs=array(
//	'Creates'=>array('index'),
//	'Create',
//);

$this->menu=array(
	array('label'=>'List Creates', 'url'=>array('index')),
	array('label'=>'Manage Creates', 'url'=>array('admin')),
);
?>

<h1>Create Creates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>