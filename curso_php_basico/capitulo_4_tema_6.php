<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strspn y strcspn</h1>
<?php
// strpos(string,find,start)
echo strspn("Hello world!","rld")."<br>";
$cadena="Sssaludos para todos en el curso..";
$car="od";
echo strspn("Ssssaludosj para todos en el curso dos..","dSsdoal")."<br>";
echo strcspn($cadena,$car);

?>
</center>
</body>
</html>