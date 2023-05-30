<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia <I>IF</h1>
<h3>Nombre:capitulo_3_tema_1.php</h3>
<?php
$a1=4;
$b1=3;
if ($a1>$b1){
echo "a es mayor que b";
}
$a=3;
$b=7;
$c=9;
echo "<br> los tres números a comparar son: ";
echo "<b>$a,$b</b> y <b>$c</b><br><br>";
echo "y el mayor es el: <b>";
echo "</b>";
if (($a>$b)&&($a>$c)){
	echo $a;
}
if (($b>$a) && ($b>$c)){
	echo $b;
}
if (($c>$a) && ($c>$b)){
	echo $c;
}
?>
</center>
</body>
</html>