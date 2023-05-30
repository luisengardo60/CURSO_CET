<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Suma de x números . Práctica de include con inc </h1>
<?php
//Al utilizar include en las decisiones de bucles, asegure
//colocar el llamado entre llaves. así evitará errores en las
//rutinas

echo "La suma de los <b>$x</b> primeros números enteros es:<br><br>";
$suma=0;
$contador=0;
for ($i=1;$i<=$x;$i++){
  $suma+=$i;
  echo "$i";
  if ($i==$x){
    echo "=";
  }
    else { 
     echo "+";
   }
   $contador++;
   if ($contador<20){
   
   $contador++;     
   }
   else {
   echo "<br>";
   $contador=0;
   
   }
     
}
echo "<b>".$suma."</b>";


?>
</center>
</body>
</html>