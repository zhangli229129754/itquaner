<div class="m w800">

<form>
	<fieldset class="fieldset">
		<label>地区</label>
		<input type="text" placeholder="Type something">
		<span class="help-block"></span>
	</fieldset>
	<fieldset class="fieldset">
		<label>小区</label>
		<input type="text" placeholder="Type something…">
		<span class="help-block"></span>
	</fieldset>
	<fieldset class="fieldset">
		<label>&nbsp;</label>
		<button type="submit" class="btn">提 交</button>
	</fieldset>
</form>

<div class="clear"></div>
</div>






<?php
$model = new User();
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'nickname', array(
	'class'=>'span3',
	'data-title'=>'A Title', 
	'data-content'=>'<a>aa</a>', 
	'rel'=>'popover',
)); ?>

<?php //echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
<?php //echo $form->checkboxRow($model, 'checkbox'); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
 
<?php $this->endWidget(); ?>







<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'type'=>'danger',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'<a>aa</a>', 'rel'=>'popover'),
)); ?>

