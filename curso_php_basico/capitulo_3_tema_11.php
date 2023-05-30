<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencias de bucles <I>for</></h1>
<?php
echo "La suma de los diez primeros números enteros es:<br>";
$suma=0;
for ($i=1;$i<=10;$i++){
  $suma+=$i;
  echo "$i";
  if ($i==10){
    echo "=";
  }
    else { 
     echo "+";
   }
   
     
}
echo "<b>".$suma."</b>";

echo "<br>";
$numero=8;
echo "<br><b>Número factorial!</b> = ";
$factorial=1;
for ($i=$numero;$i>=1;$i--){
  $factorial*=$i;
  echo $i;
  echo($i==1)?"=":"x";
}
echo "<b>$factorial</b>";
?>
</center>
</body>
</html>