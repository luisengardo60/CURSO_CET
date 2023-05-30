<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>While</></h1><br>
<?php
echo "La suma de los Diez primeros números enteros es:";
$suma=0;
$i=1;
while($i<=10){
$suma+=$i;
echo ($i==10) ?"$i = ":"$i+";
$i++;
}
echo "<b>$suma</b>";
?>

<?php
echo "<br><br>";
echo "<table border ='1'>";
$fila=1;
while ($fila<=10){
  echo "<tr align='center'>";
  $columna=1;
  while ($columna<=10){
    echo "<td>".($fila*$columna)."<td>";
    $columna++;
  }
  echo "</tr>";
  $fila++;
}
?>


</center>
</body>
</html>