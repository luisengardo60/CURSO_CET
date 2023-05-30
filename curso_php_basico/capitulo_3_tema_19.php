<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>Continue</></h1><br>
<?php

for($i=0;$i < 19; $i++) //bucle que va desde 0 hasta 19
{
if($i == 10) continue; //si estamos en la iteración 10 queremos que salte directamente a la siguiente iteración
if($i == 15) break; //si estamos en la iteración 15 queremos que termine el bucle

echo "Estamos en la iteración número: $i <br>";
//codigo a ejecutar
}
echo "El bucle ha terminado.";
?>



</center>
</body>
</html>
