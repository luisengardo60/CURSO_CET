<html> <head>  <title>ejercicio 4.4</title> </head>
<center>
<h2>Programación en PHP a través de ejemplos</h2>
<h3>Nombre: capitulo_0_tema_3.php</h3><br><br>	
<body>
<?php
echo "<table border=1>";
 $n=1; 
 for ($n1=1; $n1<=10; $n1++) {  
  echo "<tr>";  
   for ($n2=1; $n2<=10; $n2++)   {   
      echo "<td>", $n, "</td>"; 
           $n=$n+1;   }
   echo "</tr>";
    } 
    echo "</table>"; ?>
</center></body> </html>