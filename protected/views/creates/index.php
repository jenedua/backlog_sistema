<?php
/* @var $this CreatesController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Creates',
//);

$this->menu=array(
	array('label'=>'Create Creates', 'url'=>array('create')),
	array('label'=>'Manage Creates', 'url'=>array('admin')),
);
?>

<h1>List Backlog System</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
