
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>En este ejemplo, se ha habilitado un disparador de envío de mensajes de errores, a voluntad:.</h3></strong></em>";
$test=2;
if ($test>=1) {
trigger_error("El valor debe ser 1 o menor");
}
?> 
</body>
</head>
</html>