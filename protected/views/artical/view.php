<?php
/* @var $this ArticalController */
/* @var $model Artical */

$this->breadcrumbs=array(
	'Articals'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Artical', 'url'=>array('index')),
	array('label'=>'Create Artical', 'url'=>array('create')),
	array('label'=>'Update Artical', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Artical', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artical', 'url'=>array('admin')),
);
?>

<h1>View Artical #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'source',
		'user_id',
		'user_name',
		'add_time',
		'update_time',
	),
)); ?>
