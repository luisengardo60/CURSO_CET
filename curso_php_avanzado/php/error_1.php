
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>Se trató de abrir un archivo que no existe. Podemos evitar este tipo de mensajes:</h3></strong></em><br>";
$file=fopen("welcome.txt","r");
echo "para evitar este tipo de mensajes (ver el código del programa):<br>";
if(!file_exists("welcome.txt")){
die("No se encontró el archivo...");
} else {
$file=fopen("welcome.txt","r");
}
?>
</body>
</head>
</html>