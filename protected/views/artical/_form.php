<?php
/* @var $this ArticalController */
/* @var $model Artical */
/* @var $form CActiveForm */
?>

<div class="form">
<script>
	function send(){
		var data=$("#artical-form").serialize();
		$.post("<?php echo $this->createUrl('artical/create', array('ajax'=>'ajax'));?>",data,function(html){
			
			if(html == 1) {
				$('.modal-message').show().html('分享成功！感谢您的分享！');
				setTimeout(function(){
					$('.modal-message').hide().html('');
					window.location.reload();
				}, 2000);

			} else {
				$('.modal-body').html(html);	
			}
		
		});
		return false;
	}
</script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artical-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array(
		'onsubmit'=>"return false;"
	),
	'clientOptions' => array(
		'validateOnSubmit' => true,
    ),
	//'enableAjaxValidation'=>true,
	'action'=>'#iframe',
)); ?>

	<div class="modal-message alert alert-success" style="display:none;"></div>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php //echo $form->errorSummary($modelArtical); ?>

	<div class="row_form">
		<?php echo $form->labelEx($modelArtical,'title'); ?>
		<div class="f"><?php echo $form->textField($modelArtical,'title',array('size'=>60,'maxlength'=>255,'class'=>'input-xlarge')); ?></div>
		<?php echo $form->error($modelArtical,'title'); ?>
	</div>

	<div class="row_form">
		<?php echo $form->labelEx($modelArtical,'source'); ?>
		<div class="f"><?php echo $form->textField($modelArtical,'source',array('size'=>100,'maxlength'=>255,'class'=>'input-xlarge')); ?></div>
		<?php echo $form->error($modelArtical,'source'); ?>
	</div>
	
	<div class="row_form">
		<?php echo $form->labelEx($modelArtical,'img'); ?>
		<div class="f"><?php echo $form->textField($modelArtical,'img',array('size'=>60,'maxlength'=>255)); ?></div>
		<?php echo $form->error($modelArtical,'img'); ?>
	</div>
	
	<div class="row_form">
		<?php echo $form->labelEx($modelContent,'content'); ?>
		<div class="f"><?php echo $form->textArea($modelContent,'content',array('class'=>'input-xlarge')); ?></div>
		<?php echo $form->error($modelContent,'content'); ?>
	</div>

	<div class="row_form buttons">
		<?php echo CHtml::button($modelArtical->isNewRecord ? '提交' : 'Save', array('class'=>'btn btn-primary', 'onclick'=>'send();')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->