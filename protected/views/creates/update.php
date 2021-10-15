<?php
/* @var $this CreatesController */
/* @var $model Creates */

//$this->breadcrumbs=array(
//	'Creates'=>array('index'),
//	$model->title=>array('view','id'=>$model->id),
//	'Update',
//);

$this->menu=array(
	array('label'=>'List Creates', 'url'=>array('index')),
	array('label'=>'Create Creates', 'url'=>array('create')),
	array('label'=>'View Creates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Creates', 'url'=>array('admin')),
);
?>

<h1>Update Creates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>