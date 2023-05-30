<!DOCTYPE html>
<html>
<body>
	<?php
$myfile = fopen("C://wamp64/www/CURSO_CET/curso_php_avanzado/files/archivo_text_1.txt", "r") or die("No se puede abrir el archivo!");
// Extrae un solo caracter, hasta que se detecte el fin de archivo
echo "<h3> Lectura con fgetc().Caracter por caracter, Primero fopen().</h3>";
echo "<br>";
echo "<h3> Primero una sola letra: </h3>";
echo fgetc($myfile);
echo "<br>";
echo "<h3> Ahora todos los caracteres en un loop...</h3><br>";
while(!feof($myfile)) {
echo fgetc($myfile);
}
fclose($myfile);
?>
</body>
</html>