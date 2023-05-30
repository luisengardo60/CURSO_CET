<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función substr</h1>
<h1>Formato:<font color='red'>   substr(cadena, inicio, tamaño).</h1>
<font color='black'>
<?php

//permite substraer una sub-cadena de una cadena
//permitiendo controlar la longitud de dicha extracción.



$cadena="murcielago";
$ini1=2;
$ini2=-2;
$ini3=-3;
$ini4=-8;
$tam1=3;
$tam2=-3;
//cuando el tamaño es negativo, esos caracteres se excluyen desde el final
//cuando el inicio es negativo, se busca el inicio en forma regresiva, pero la cuenta inicia en 1
//no en cero 

//substr(string,start,length)
echo "<h2>cadena a utilizar:<b><font color='red' face='Comic Sans MS,arial'>  murcielago</b><h2><br>";
echo "<font color='black'>";
echo "<font color='blue'>inicio=2<br>";
echo "<font color='black'>";
echo substr($cadena, $ini1)."<br>";
echo "<font color='blue'>inicio=2 tamaño=3<br>";
echo "<font color='black'>";
echo substr($cadena, $ini1,$tam1)."<br>";
echo "<font color='blue'>inicio=-2<br>";
echo "<font color='black'>";
echo substr($cadena, $ini2)."<br>";
echo "<font color='blue'>inicio=-3<br>";
echo "<font color='black'>";
echo substr($cadena, $ini3)."<br>";
echo "<font color='blue'>inicio=2 tamaño =-3<br>";
echo "<font color='black'>";
echo substr($cadena, $ini1,$tam2)."<br>";
echo "<font color='blue'>inicio=-8 tamaño=-3<br>"; 
echo "<font color='black'>";
echo substr($cadena, $ini4,$tam2)."<br>";

//

?>
</center>
</body>
</html>