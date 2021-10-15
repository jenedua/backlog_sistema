<?php
/* @var $this CreatesController */
/* @var $data Creates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsavel')); ?>:</b>
	<?php echo CHtml::encode($data->responsavel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chamadas')); ?>:</b>
	<?php echo CHtml::encode($data->chamadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desenvolvimento')); ?>:</b>
	<?php echo CHtml::encode($data->desenvolvimento); ?>
	<br />


</div>