<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia <I>IF combinado con ELSEIF-else</></h1>
<?php
$a1=4;
$b1=3;
if ($a1>$b1){
echo "a es mayor que b";
}
$a=31;
$b=24;
$c=20;
echo "<br> los tres números a comparar son: ";
echo "<b>$a,$b</b> y <b>$c</b><br><br>";
echo "y el mayor es el: <b>";

if ($a>$b){
	if ($a>$c){
		$elmayor=$a;

	}
	else {
		$elmayor=$c;
	}

}


elseif($b>$c){
	$elmayor=$b;

}
    else {
    	$elmayor=$c;
    }
echo "$elmayor </b>";

?>
</center>
</body>
</html>