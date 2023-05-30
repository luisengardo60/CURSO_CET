<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strlen</h1>
<?php
$cadena="Saludos a todos en el curso PHP";
echo "<table border='1' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='yellow'>";
echo "<td>carácter</td><td>Posición</td></tr>";

for ($i=0;$i<strlen($cadena);$i++){
	echo "<tr align='center'>";
	echo "<td>".$cadena[$i]."</td><td>".$i."</td></tr>";
}
echo "</table>";
?>
</center>
</body>
</html>