<?php
/* @var $this CreatesController */
/* @var $model Creates */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'creates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title',array('class'=>'control-label col-md-3')); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo',array('class'=>'control-label col-md-3')); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsavel',array('class'=>'control-label col-md-3')); ?>
		<?php echo $form->textField($model,'responsavel',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'responsavel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chamadas',array('class'=>'control-label col-md-3')); ?>
		<?php echo $form->textArea($model,'chamadas', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'chamadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desenvolvimento',array('class'=>'control-label col-md-3')); ?>
		<?php echo $form->textArea($model,'desenvolvimento', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'desenvolvimento'); ?>
	</div>

	<div class="row buttons append-15">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->