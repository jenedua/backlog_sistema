<?php
/* @var $this CreatesController */
/* @var $model Creates */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsavel'); ?>
		<?php echo $form->textField($model,'responsavel',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chamadas'); ?>
		<?php echo $form->textArea($model,'chamadas', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desenvolvimento'); ?>
		<?php echo $form->textArea($model,'desenvolvimento', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->