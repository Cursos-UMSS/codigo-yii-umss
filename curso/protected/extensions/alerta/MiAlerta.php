

<?php 

class Mialerta extends CWidget
{
	
	function init()
	{
		echo CHtml::link('pincha mi alerta', '#',array('onclick'=>'alert("hola mundo")'));
	}
}
 ?>