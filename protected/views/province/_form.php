<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'province-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'province_name'); ?>
		<?php echo $form->textField($model,'province_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'province_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->