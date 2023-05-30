<html> <head>  <title>ejercicio 4.6</title> </head>
<body>
	<h2>Programación en PHP a traves de ejemplos</h2>
<h3>Nombre: capitulo_0_tema_4.php</h3><br><br>	
<?php
define('TAM',4);
 function potencia ($v1, $v2) {   
 	$rdo= pow($v1, $v2); 
   return $rdo;
    }
echo "<table border=1>"; 
for ($n1=1; $n1<=TAM; $n1++) { 
  echo "<tr>"; 
    for ($n2=1; $n2<=TAM; $n2++) 
         echo "<td>". potencia($n1,$n2). "</td>";
   echo "</tr>";
//Programación en PHP a través de ejemplos 10
} echo "</table>";
 ?>
</body> </html>
