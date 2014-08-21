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


<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
$gridColumns = array(
array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
array('name'=>'nombre', 'header'=>'Nombre'),
array('name'=>'apellidos', 'header'=>'Apellido'),
array('name'=>'ci', 'header'=>'carnet de identidad'),
array('name'=>'telefono', 'header'=>'Telefono '),
array('name'=>'email', 'header'=>'EMAIL '),
array(
'htmlOptions' => array('nowrap'=>'nowrap'),
'class'=>'bootstrap.widgets.TbButtonColumn',
'viewButtonUrl'=>null,
'updateButtonUrl'=>null,
'deleteButtonUrl'=>null,
)
);
       $this->widget(
    'bootstrap.widgets.TbGridView',
    array(
    'dataProvider' => $dataProvider,
    'template' => "{items}",
    'columns' => $gridColumns,
    )
    );
?>
