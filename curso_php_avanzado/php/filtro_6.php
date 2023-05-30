
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>La función Filter_var permite validar un rango.</h3></strong></em>";
echo "<em><strong><h3>Para el ejemplo, rango entre 1 y 200. Se utilizó 322, que está fuera de rango.</h3></strong></em>";
$int = 322;
$min = 1;
$max = 200;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
echo("Valor de la variable no está en el rango permitido¡¡¡");
} else {
echo("Valor de la variable está en el rango permitido");
}
?> 
</body>
</head>
</html>