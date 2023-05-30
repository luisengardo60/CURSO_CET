<!DOCTYPE html>
<html>
<body>
<?php
//Si el archivo no existe, se debe colocar el parámetro w.
$myfile = fopen("C://wamp/www/CURSO_CET/curso_php_avanzado/caracas1.txt", "w") or die("No se puede abrir el archivo!");
$txt = "JS = Java Script\n";
fwrite($myfile, $txt);
$txt = "VS = Visual Basic\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "<h4>Se agregó con éxito la cadena 'JS = Java Script'  y la cadena 'VS = Visual Basic'</h4><br> ";
echo "<h4>Observe el archivo 'archivo_text_1.txt'</h4>";
echo "<h4>Si el archivo no existe debe colocar el parámetro 'w'</h4>";
?> 
</body>
</html>