<div class="row">
    <div class="span9">
        <div id="content">
			<?php
			/* @var $this ArticalController */
			/* @var $model Artical */
			$this->breadcrumbs=array(
				'Login'=>array('index'),
			);
			?>
			<h1>Login</h1>

			<p>Please fill out the following form with your login credentials:</p>

			<div class="form">

			<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
				'id'=>'login-form',
				'type'=>'horizontal',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->textFieldRow($model,'username'); ?>

				<?php echo $form->passwordFieldRow($model,'password',array(
					'hint'=>'Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>',
				)); ?>

				<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

				<div class="form-actions">
					<?php $this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'submit',
						'type'=>'primary',
						'label'=>'Login',
					)); ?>
				</div>

			<?php $this->endWidget(); ?>

			</div><!-- form -->
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'新浪微博登录',
			'type'=>'danger', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
			'size'=>'large', // null, 'large', 'small' or 'mini'
			'url'=>array('weibo/index'),
			'htmlOptions'=>array('target'=>'_blank'),
		)); ?>
       
        </div><!-- sidebar -->
    </div>
</div>