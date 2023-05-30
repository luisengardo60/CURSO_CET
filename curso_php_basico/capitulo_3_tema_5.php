<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia <I>IF combinado con ELSEIF-else</></h1>
<?php
// La sentencia if-elseif-else puede tener tantos componentes elseif
//como sea necesario
echo "Hoy es <b>";
$dia=date("D");
if ($dia=="Mon"){
	echo "Lunes";
}elseif ($dia=="Tue"){
	echo "Martes";
} elseif ($dia=="Wed"){
	echo "Miércoles";
} elseif ($dia=="Thu"){
	echo "Jueves";
} elseif ($dia=="Fri"){
	echo "Viernes";
} elseif ($dia=="Sat"){
	echo "Sábado";
} else {
	echo "Domingo";
	echo "</b>";
}
?>
</center>
</body>
</html>