<?php
/* @var $this CreatesController */
/* @var $model Creates */

//$this->breadcrumbs=array(
//	'Creates'=>array('index'),
//	$model->title,
//);

$this->menu=array(
	array('label'=>'List Creates', 'url'=>array('index')),
	array('label'=>'Create Creates', 'url'=>array('create')),
	array('label'=>'Update Creates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Creates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Creates', 'url'=>array('admin')),
);
?>

<h1>View Creates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'motivo',
		'responsavel',
		'chamadas',
		'desenvolvimento',
	),
)); ?>
