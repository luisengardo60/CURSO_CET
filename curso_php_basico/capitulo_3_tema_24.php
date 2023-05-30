<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Rutina principal que usa  el inc factorial y suma de x primeros números </h1>
<?php
//Al utilizar include en las decisiones de bucles, asegure
//colocar el llamado entre llaves. así evitará errores en las
//rutinas
$operacion="divisores_primo";
if($operacion=="divisores_primo"){
	$x=80;	
	include("capitulo_3_tema_24_suma.inc");}
else{
	$numero=8;
	include("capitulo_3_tema_24_factorial.inc");
}
?>
</center>
</body>
</html>