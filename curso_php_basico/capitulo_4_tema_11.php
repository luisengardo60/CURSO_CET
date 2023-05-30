<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función substr_replace</h1>
<h1>Formato:<font color='red'>   substr_replace(cadena,reemplazo,inicio,tamaño).</h1>
<font color='black'>
<?php

//permite substraer una sub-cadena de una cadena
//permitiendo controlar la longitud de dicha extracción.

$cadena="murcielago";
$cadena2="123";
$ini1=2;
$ini2=-2;
$tam1=0;
$tam2=-3;
$tam3=-5;
//substr_replace(string,replacement,start,length) 
//Un inicio negativo indica que se debe comenzar desde el final de la cadena
//Un tamaño negativo indica los caracteres al final que no irán en la subcadena

echo "<h2>cadenas a utilizar:<b><font color='red' face='Comic Sans MS,arial'> 1.-murcielago  2.-123</b><h2><br>";

echo "<font color='blue'>inicio=2<br>";
echo "<font color='black'>";
echo substr_replace($cadena,$cadena2, $ini1)."<br>";
echo "<font color='blue'>inicio=2 ,  tamaño=0<br>";
echo "<font color='black'>";
echo substr_replace($cadena, $cadena2, $ini1,$tam1)."<br>";
echo "<font color='blue'>inicio=-2<br>";
echo "<font color='black'>";
echo substr_replace($cadena, $cadena2, $ini2)."<br>";
echo "<font color='blue'>inicio=2, tamaño=-3<br>";
echo "<font color='black'>";
echo substr_replace($cadena, $cadena2, $ini1,$tam2)."<br>";
echo "<font color='blue'>inicio=2, tamaño=-5<br>";
echo "<font color='black'>";
echo substr_replace($cadena, $cadena2, $ini1,$tam3)."<br>";

?>
</center>
</body>
</html>