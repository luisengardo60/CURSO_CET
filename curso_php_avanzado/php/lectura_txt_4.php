<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2> Lectura con fread(). Primero fopen().</h2>";
echo "<br>";
echo "<h2>lazo while() para recorrer archivo con múltiples fgets hasta feof():</h2>";
echo "<br>";
$myfile = fopen("C://wamp64/www/CURSO_CET/curso_php_avanzado/files/archivo_text_1.txt", "r") or die("No se puede abrir el archivo!");
// Muestra la línea o registro hasta que detecte fin de archivo.
while(!feof($myfile)) {
echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>