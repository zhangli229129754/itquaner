<?php
/* @var $this ArticalController */
/* @var $model Artical */

$this->breadcrumbs=array(
	'Articals'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artical', 'url'=>array('index')),
	array('label'=>'Create Artical', 'url'=>array('create')),
	array('label'=>'View Artical', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Artical', 'url'=>array('admin')),
);
?>

<h1>Update Artical <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>