
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>El filtro permite una combinación con sanitaze y la eliminación de caracres no ASCII:</h3></strong></em>";
echo "<em><strong><h3>Se eliminaron las etiquetas y caracteres no ASCII</h3></strong></em>";
$str = "<h1>Saludos estudiantes curso avanzadoÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?> 
</body>
</head>
</html>