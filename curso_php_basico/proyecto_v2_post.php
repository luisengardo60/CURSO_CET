<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<center>
	<h2><b><font color="blue"> Mínimo, Máximo, Promedio y desviación Estandar de los datos en las siguientes ciudades:</font></b><h2>
<?php
$sitio=$_POST['sitios'];
$pais= $_POST['ciudad'];
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
$nomenclatura=array("Maracaibo"=>"Maracaibo","Coro"=>"Coro","Merida"=>"Merida","Trujillo"=>"Trujillo","Puerto_La_Cruz"=>"Puerto_La_Cruz","Caracas"=>"Caracas","Ciudad_Bolivar"=>"Ciudad_Bolivar","San_Cristobal"=>"San_Cristobal","Porlamar"=>"Porlamar","Maracay"=>"Maracay");

//echo $nomenclatura['Ciudad_Bolivar'];


$k=0;
$pvar=0;

foreach ($nomenclatura as $clave => $valor) {

if ($sitio=="todos"){
//$informacion=function calcula($k);
for ($g=0;$g<100;$g++){
 $vector[$g]=$matriz[$g][$k];
 }
 $min=min($vector);
 $max=max($vector);
 $promedio=array_sum($vector)/count($vector);
 //$desv($vector);
 echo "Ciudad: ".$clave."; Máximo: ".$max."; Mínimo: ".$min."; Promedio: ".$promedio;
 echo "<br>";
 echo "<hr>";
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
 echo "Ciudad: ".$clave."; Máximo: ".$max."; Mínimo: ".$min."; Promedio: ";
 echo "<br>";
 echo "<hr>";
 $pvar++;

}
$k++;


}

?>
</center>
</body>
</head>
</html>