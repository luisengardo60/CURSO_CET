<html>
<head>
<Title>Operadores</title>
</head>
<body>
<center>
<h1>Sentencia <I>IF compacto</></h1>
<?php
// La sentencia if-elseif-else puede tener tantos componentes elseif
//como sea necesario
$a=4;
$b=0;
$c=20;
echo "<br> Los tres números a comprear son:";
echo "<b>$a,$b</b> y <b>$c</b><br><br>";
echo "y el mayor es el: <b>";
$elmayor=($a>$b)?$a:$b;
echo ($elmayor<$c)?$c:$elmayor;
echo "</b>";
?>
</center>
</body>
</html>