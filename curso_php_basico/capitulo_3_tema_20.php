<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

echo "Estamos en la iteraci&oacuten número: $i <br>";
//codigo a ejecutar
}
echo "El bucle ha terminado.<br><br>";
?>



<?php


$letters = [ 'A', 'B', 'C' ];
foreach ( $letters as $letter) {
    if(  $letter =="B") {
        break;
        echo 'Esto nunca se imprimirá';
    }
    echo $letter."<br><br>";
}


$letters = [ 'A', 'B', 'C' ];
foreach ( $letters as $letter) {
    if(  $letter =="B") {
        continue;
        echo 'Esto nunca se imprimirá';
    }
    echo $letter;
}
?>


</center>
</body>
</html>
