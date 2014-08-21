<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alumnos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'apellidos',
		'ci',
		'telefono',
		'email',
		array(
			'name'=>'id',
			'header'=>'jose',
			'value'=>'$data->nombre',
			),
		 array(
                        'name'=>'id',
                        'header'=>'prueba ',
                        'type'=>'raw',//mostar datos html date o datetime
                        'value'=>'$data->id',
                        //'value'=>'strtoupper($data->nombre." ".$data->apellido)',
                        'filter'=>CHtml::listData(Alumno::model()->findAll(),'id','apellidos','nombre'),
                        ),
		array(
			'class'=>'CButtonColumn',
		),

	),
)); ?>
