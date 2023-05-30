<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Foreach para Arreglos vectoriales  <I>for</></h1><br>
<?php
$matriz[0]="cougar";
$matriz[1]="ford";
$matriz[2]=null;
$matriz[3]="2.500";
$matriz[4]="V6";
$matriz[5]=182;
?>
<table border='1' cellpadding='2' cellspacing='2'>
  <tr align='center' bgcolor='yellow'>
<?php
for ($i=0;$i<6;$i++){
  echo "<td>".$matriz[$i]."</td>";
}
?>

</tr>
 <tr align='center' bgcolor='yellow'>
<?php
foreach ($matriz as $valor){
  echo "<td>".$valor."</td>";
}
?>
</tr>
<table border='1' cellpadding='2' cellspacing='2'>
  <tr align='center' bgcolor='yellow'>
    <td> Posición</td>
      <td>Contenido</td>
    </tr>

    <?php
    echo "<br>";
    foreach ($matriz as $clave=>$valor){
      echo "<tr align 'center'>";
      echo "<td> $clave </td>";
      echo "<td> $valor </td>";
      echo "</tr>";

    }
    ?>
<?php

//Se puede aplicar a arreglos vectoriales o matriciales asociativos

$matriz2['modelo']="cougar";
$matriz2['marca']="ford";
$matriz2['fecha']=null;
$matriz2['cc']="2.500";
$matriz2['motor']="V6";
$matriz2['potencia']=182;
?>

<table border='1' cellpadding='2' cellspacing='2'>
  <tr align='center' bgcolor='grey'>
    <td> Clave</td>
      <td>Contenido</td>
    </tr>
<?php
    echo "<br>";
    foreach ($matriz2 as $clave=>$valor){
      echo "<tr align 'center'>";
      echo "<td> $clave </td>";
      echo "<td> $valor </td>";
      echo "</tr>";

    }
    ?>


  

</center>
</body>
</html>