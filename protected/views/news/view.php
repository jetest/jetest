<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'porder',
		'name',
		'url',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'summary',
		'body',
		'live',
		'date_created',
		'date_modified',
		'created_by',
		'modified_by',
		'start_date',
		'end_date',
	),
)); ?>
