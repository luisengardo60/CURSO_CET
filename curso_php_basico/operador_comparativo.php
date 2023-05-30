<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title><h2><em><strong>Ooperadores</strong></em></h2></title>
<body>
	<center>
		<h2><em><strong>Operadores Comparativos, binarios y lógicos</strong></em></h2>
		<?php
		$a=3;
		$b=7;
		$c=9;
		echo "<br>Los tres números a comparar son: ";
		echo "<b>$a, $b </b>y<b> $c </b><br><br>";
		echo "el mayor es el ";
		echo ($a>$b)&&($a>$c)?$a:"";
		echo ($b>$a)&&($b>$c)?$b:"";
		echo ($c>$a)&&($c>$b)?$c:"";
		echo "<br><br>";
$a=3;
$b=9;
echo " El and lógico de 3 y 9 es:<br>";
echo $a&$b;
echo "<br>";
echo " El or lógico de 3 y 9 es:<br>";
echo $a|$b;
echo "<br>";
echo " El xor lógico de 3 y 9 es:<br>";
echo $a^$b;
echo "<br>";
echo " El negado de 3 es:<br>";
echo ~$a;
echo "<br>";
echo " y un desplazamiento hacia la izquierda es:<br>";
//Desaplaza $a dos veces hacia la izquierda.
echo $a<<2;
echo "<br>";
		?>
	</center>
</body>
</html>