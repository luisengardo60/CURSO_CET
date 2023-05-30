<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<center>
	<h2><b><font color="blue"> Mínimo, Máximo, Promedio y desviación Estandar de los datos en los siguientes tiempos:</font></b><h2>
<?php
function promedio($arreglo){
	$sum=0;
for ($i=0;$i<count($arreglo);$i++){
	$sum+=$arreglo[$i];
}
	$sum=$sum/count($arreglo);
return $sum;
}

function desviacion($arreglo){
$prom=0;
for ($i=0;$i<count($arreglo);$i++){
	$prom+=$arreglo[$i];
}
	$acum=0;
	$prom=$prom/count($arreglo);
for ($i=0;$i<count($arreglo);$i++){
	$dif=(($arreglo[$i]-$prom)*($arreglo[$i]-$prom));
		$acum+=$dif;
	}
	$desv=sqrt($acum)/count($arreglo);
	$desv=number_format($desv, 2, ",", ".");
return $desv;
}

$tiempo=$_POST['tiempo'];
if (isset($_POST['tiempos'])){
$tiempos= $_POST['tiempos'];
}
//echo "El arreglo de selecciones: ";
//print_r($tiempos);
//echo "<br>";
//echo "El tamaño del vector de selecciones: ";
//echo count($tiempos);
//echo "<br>";
//echo " El valor del bottom: ";
//print_r($tiempo);
//echo "<br>";
?>
<font color='red'>

<hr>
</font color='black'>
<br>
<?php
//foreach($pais as $clave=>$valor){
//echo "<br>clave: ".$clave."<br>";
//echo "<br>valor: ".$valor."<br>";
//}
//echo $sitio."<br>";
for ($c=0;$c<10;$c++){
for ($f=0;$f<100;$f++){
	$matriz[$f][$c]=mt_rand(50,200);
	//echo $matriz[$f][$c].",";
}
}

if ($tiempo=="todos"){
	echo "<table border='1' cellspacing='2' cellpadding='2'>";
	echo "<tr  align 'center' bgcolor='yellow'><td align='center'>Tiempo</td>";
	echo "<td align='center'>Mínimo</td><td align='center'>Máximo</td><td align='center'>Promedio</td>";
	echo "<td align='center'>Desviación Estándar</td></tr>";
	
	for ($f=0;$f<100;$f++){
		for ($c=0; $c < 10; $c++) {
		$vector[$c]=$matriz[$f][$c]; 
		
		}
		$max=max($vector);
		$min=min($vector);
	
		
	echo "<tr lign='center'>";

		echo "<td align=center'>".$f."</td><td align='center'>".(min($vector))."</td><td align='center'>".max($vector)."</td><td align='center'>".(promedio($vector))."</td><td align='center'>".(desviacion($vector))."</td>";
	echo "</tr>";
	
	}
	echo "</table>";
//echo "fracaso";
}

else{
	//echo "exito";
	if (isset($_POST['tiempos'])){
		
		echo "<table border='1' cellspacing='2' cellpadding='2'>";
	echo "<tr  align 'center' bgcolor='yellow'><td align='center'>Tiempo</td>";
	echo "<td align='center'>Mínimo</td><td align='center'>Máximo</td><td align='center'>Promedio</td>";
	echo "<td align='center'>Desviación Estándar</td></tr>";
		for ($f=0;$f<count($tiempos);$f++){
		for ($j=0;$j<10;$j++){
			$vector[$j]=$matriz[$tiempos[$f]][$j];
			} 

			echo "<td align=center'>".$f."</td><td align='center'>".(min($vector))."</td><td align='center'>".max($vector)."</td><td align='center'>".(promedio($vector))."</td><td align='center'>".(desviacion($vector))."</td>";
		echo "</tr>";
	
		}
		echo "</table>";
	}

	}
?>
</center>
</body>
</head>
</html>