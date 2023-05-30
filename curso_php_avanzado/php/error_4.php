
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>En este ejemplo se ha combinado la adaptación de mensajes de errores y el disparo a voluntad:</h3></strong></em>";
// En este caso, cuando un error ocurre, utilizamos un segundo parámetro,
// que llaa a la función y finaliza el script
//función que maneja el error
function customError($errno, $errstr){
echo "<b>Error:</b> [$errno] $errstr<br>";
echo "Finalizado el Script...";
die();
}
//programando o estableciendio al manejador
set_error_handler("customError",E_USER_WARNING);
//Disparando el error
$test=2;
if ($test>=1){
trigger_error("El valor debe ser 1 o menor",E_USER_WARNING);
}
?> 
</body>
</head>
</html>