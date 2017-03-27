<?php
/* @var $this RolesController */
/* @var $model Roles */
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Roles', 'url'=>array('index')),
	array('label'=>'Create Roles', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#roles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Roles</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'role_id',
		'role',
		'description',
        array(
            'name'=>'Status',
            'value'=>function($data,$row){
                if($data->is_active =='1'){
                    return 'Active';
                }else if($data->is_active =='0'){
                    return 'Inactive';
                }else{
                    return 'No action';
                }
            },
            'filter'=>false,
        ),
		//'is_active',
//		'created_at',
//		'updated_at',
		/*
		'deleted_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
