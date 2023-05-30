<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<center>
	<h2><b><font color="blue"> Mínimo, Máximo, Promedio y desviación Estandar de los datos en las siguientes ciudades:</font></b><h2>
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

$sitio=$_POST['sitios'];
if (isset($_POST['ciudad'])){
$pais= $_POST['ciudad'];
}
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
//echo "<br>";
/*Rutina que ejecuta análisis de selección de cálculo
según la marca del usuario en el formulario*/
//se hará un arreglo asociativo que facilite conexión nombre
//ciudad con código
$nomenclatura=array("Maracaibo"=>"A1","Coro"=>"A2","Merida"=>"A3","Trujillo"=>"A4","Puerto_La_Cruz"=>"A5","Caracas"=>"A6","Ciudad_Bolivar"=>"A7","San_Cristobal"=>"A8","Porlamar"=>"A9","Maracay"=>"A10");

//echo $nomenclatura['Ciudad_Bolivar'];

$contador=0;
$marca=array(0,0,0,0,0,0,0,0,0,0);
if (($sitio=="nada") and isset($_POST['ciudad'])){
foreach($pais as $clave=>$valor){
	foreach($nomenclatura as $clave2=>$valor2){
		if ($pais[$clave]==$nomenclatura[$clave2]){
			$marca[$contador]=1;
		}
		$contador++;
	}
	$contador=0; 
}



for ($n=0;$n<10;$n++){
//echo $marca[$n];

}

}
$k=0;
$marca2=false;
echo "<table border='1' cellspacing='2' cellpadding='2'>";
	echo "<tr  align 'center' bgcolor='yellow'><td align='center'>Ciudad</td>";
	echo "<td align='center'>Mínimo</td><td align='center'>Máximo</td><td align='center'>Promedio</td>";
	echo "<td align='center'>Desviación Estándar</td></tr>";
foreach ($nomenclatura as $clave => $valor) {

if ($sitio=="todos"){
	
//$informacion=function calcula($k);
for ($g=0;$g<100;$g++){
 $vector[$g]=$matriz[$g][$k];
 }
 $min=min($vector);
 $max=max($vector);
 $promedio=array_sum($vector)/count($vector);
 //$desv=stats_standard_deviation($vector);
echo "<td align=center'>".$clave."</td><td align='center'>".(min($vector))."</td><td align='center'>".max($vector)."</td><td align='center'>".(promedio($vector))."</td><td align='center'>".(desviacion($vector))."</td>";
	
echo "</tr>";
 $marca2=true;


}


elseif($marca[$k]==1){
//$informacion=function calcula($k);
for ($g=0;$g<100;$g++){
 $vector[$g]=$matriz[$g][$k];
}
 $min=min($vector);
 $max=max($vector);
 $promedio=array_sum($vector)/count($vector);
// $desv=stats_absolute_deviation($vector);
 echo "<td align=center'>".$clave."</td><td align='center'>".(min($vector))."</td><td align='center'>".max($vector)."</td><td align='center'>".(promedio($vector))."</td><td align='center'>".(desviacion($vector))."</td>";
	
echo "</tr>";
$marca2=true;
}
$k++;


}
ECHO "</table>";
if (!$marca2){

	echo "No seleccionó ciudades...";
	echo $marca2;
	

}

?>
</center>
</body>
</head>
</html>