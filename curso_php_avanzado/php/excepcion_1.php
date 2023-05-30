
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>Con la palabra reservada <font color='red'>throw</font> se cambia el flujo del programa, en este caso hacia la excepción:</h3></strong></em>";
//Se crea una función con la excepción
function checkNum($number) {
if($number>1){
throw new Exception("El valor debe ser 1 o menor");
}
return true;
}
//trigger exception
checkNum(2);
?>
</body>
</head>
</html>