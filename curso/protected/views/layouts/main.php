<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body {
				padding-top: 60px;
			}
		</style>
	</head>
	<body>
		<?php 
		$this->widget('bootstrap.widgets.TbNavBar', array(
			'type'=>'inverse',
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'Alumno', 'items'=>array(
							array('label'=>'ver alumnos', 'url'=>array('/alumno/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'registrar alumno', 'url'=>array('/alumno/create'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'administrar', 'url'=>array('/alumno/admin'), 'visible'=>!Yii::app()->user->isGuest),
							)),
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				),
			),
		)); 
		?>
		<div class="container">
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>
		</div>
	</body>
</html>