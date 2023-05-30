<html>
<head>
<Title>Operadores</title>
</head>
<body>
<center>
<h1>Sentencia <I>Switche-Case</></h1>
<?php
// La sentencia if-elseif-else puede tener tantos componentes elseif
//como sea necesario

//Ejemplo uso if else aprenderaprogramar.com

$variable=4;
echo "<br> utilizando if estructurado con else if....else<br>";
if($variable==1) {
echo '$variable es igual a 1.';
} else if($variable==2) {
echo '$variable es igual a 2.';
} else if($variable==3) {
echo '$variable es igual a 3.';
} else {
echo '$variable no es igual a 1, 2 o 3.<br><br>';
}

echo "<br>";
echo "utilizando switche y case...<br>";
$variable=4;
switch($variable){
case 1:
echo '$variable es igual a 1.';
break;
case 2:
echo '$variable es igual a 2.';
break;
case 3:
echo '$variable es igual a 3.';
break;
default:
echo '$variable no es igual a 1, 2 o 3.';
}
echo "<br>";
echo "<br>";
echo "Hoy es:  <B><br>";
$dia=date("D");

switch($dia){
    case "Mon":
     echo "Lunes";
           break;
    case "Tue":
     echo "Martes";
           break;
    case "Wed":
     echo "Miércoles";
           break; 
    case "Thu":
     echo"Jueves";
           break;  
    case "Fri":
     echo "Viernes";
           break;   
    case "Sat":
     echo "Sábado";
           break;   
           
     default: echo "Domingo";               
}

echo "</b>";
?>
</center>
</body>
</html>