<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Suma de x números . Práctica de include con inc </h1>
<?php


echo "La suma de los <b>$x</b> primeros números enteros es:<br>";
$suma=0;
for ($i=1;$i<=$x;$i++){
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


?>
</center>
</body>
</html>