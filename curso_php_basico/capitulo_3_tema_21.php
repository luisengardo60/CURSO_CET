<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>Continue y break</></h1><br>

<?php
echo "20 primeros múltiplos de 3 y 5 <br><br>";
$multiplos=0;
$i=0;
while(1){
	$i++;
	if(($i%3!=0)||($i%5!=0)){
		continue;
	}
	echo "$i ";
	$multiplos++;
	if ($multiplos>=20){
		break;
	}
}
?>
</center>
</body>
</html>
