<html>
<head>
<title> Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<?php
$metodo=$_SERVER['REQUEST_METHOD'];
$cadena_consulta=$_SERVER['QUERY_STRING'];
echo "<h2>Formularios método $metodo</h2>";
echo "<I>Query String</I>:$cadena_consulta<hr>"; 
ECHO "$_GET[modelo] $_GET[marca] $_GET[motor] $_GET[cc] $_GET[combustible]<hr>";
foreach($_GET as $clave=>$valor){
echo "<I>$clave</I>  = $valor<br>" ;
}

echo "<br>";
$si="$_GET[combustible]";

switch ("$si"){
case "Diesel": echo "Opción Diesel";Break;
case "Gasolina": echo "Opción Gasolina";Break;
default: echo "ninguno";

}

?>
</center>
</body>
</head>
</html>