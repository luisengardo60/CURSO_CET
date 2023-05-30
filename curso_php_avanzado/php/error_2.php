
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>En este ejemplo se ha adaptado el tipo de mensajes de errores.</h3></strong></em><br>";
echo " <em><strong><h3>Se ha utilizado para ello la función customError() y set_error_handler():</h3></strong></em><br>";
//manejador de errores
function customError($errno, $errstr) {
echo "<b>Error:</b> [$errno] $errstr";
}

//establecer la función
set_error_handler("customError");

//un ejemplo de disparo de la función. La variable no existe
echo($test);
?> 
</body>
</head>
</html>