<?php
/* @var $this AlumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnito',
);

$this->menu=array(
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>Alumnos</h1>

<?php  
$this->widget('ext.alerta.MiAlerta');
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
