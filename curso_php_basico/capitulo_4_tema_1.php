<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h2>Funcion  <I>strlen</I></h2>
<?php
$cadena='Saludos';
echo "<table border='1' cellpadding='2' cellspacing='2'>\n";
echo "<tr bgcolor='yellow'>\n";
echo "<TD>Caracter</TD><TD>Posicion</td></tr>";
for($i=0;$i<strlen($cadena);$i++){
	echo "<tr align='center'>";
	echo "<td>".$cadena[$i]."</td><td>".$i."</td></tr>";
}
echo "</table>";
?>
</center>
</body>
</html>