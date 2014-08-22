

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<tr>
<td>nombre</td><td>apellido</td>
</tr>

<tr>
<td>jose</td><td>luis</td>
</tr>

<tr>
<td>pedro</td><td>suarez</td>
</tr>

<tr>
<td>camilo</td><td>vargas</td>
</tr>



</table>
<?php 
for ($i=0; $i <5 ; $i++) { 
	echo $alumnos[$i]->nombre;
	echo "<br>";
}
 ?>
 <?php 
 foreach ($alumnos as &$valor) {
    
echo "nombre: ".strtoupper($valor->nombre)." - apellido: ".strtoupper($valor->apellidos)."<br>";


}
     ?>
</body>
</html>