<?php 
$nombr =$_GET['nombr'];
$sex  =$_GET['sex'];
$gust  =$_GET['gust'];
$carrera=$_GET['carrera'];
echo "<p><h1>lista </h1></p>";
echo "<p>datos recibidos:</p>";
echo "<p>Nombre: $nombr</p>";
if ($sexo=='1')
   echo "<p>Sexo: Masculino</p>";
else
   echo "<p>Sexo: Femenino</p>";
foreach ($gusto as $valor) { //=>$value
	//if(isset($valor))
		echo "<p>Gusto: $valor</p>";
}
echo "<p>Carrera: $carrera</p>";
?>