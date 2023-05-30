<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strpos y strspos</h1>
<?php
// strpos(string,find,start)
$cadena="Saludos para todos en el curso; todos hacia la autoformación colectiva...";
$car="do";
echo $cadena."<br><br>";
//se cuenta la posición en la cual aparece la cadena indicada
echo strpos($cadena,$car)."<br>";
//se cuenta hasta la última posición en que aparece la cadena buscada
echo strrpos($cadena,$car)."<br>";
?>
</center>
</body>
</html>