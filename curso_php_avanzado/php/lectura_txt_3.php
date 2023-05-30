<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2> Lectura con fgets(). Primero fopen().</h2><br>";
$myfile = fopen("C://wamp64/www/CURSO_CET/curso_php_avanzado/files/archivo_text_1.txt", "r") or die("No se puede abrir el archivo!");
echo fgets($myfile);
fclose($myfile);
?> 
</body>
</html>