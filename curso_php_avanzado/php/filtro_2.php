<!DOCTYPE html>
<html>
<body>
<?php
echo "<em><strong><h3>En este caso, la cadena original está entre etiquetas. Luego del filtro sanitize:</h3></strong></em><br>";
$str = "<h1>Saludos estudiantes curso avanzado PHP!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
</body>
</html>