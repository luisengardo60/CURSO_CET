<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función substr_count</h1>
<?php
$patron1='a';
$patron2='as';

$cadena="El libro cubre las técnicas basadas en el lenguaje PHP ";
$cadena.="que se utilizan mayoritariamente para la ";
$cadena.=" creación de sitios Web";

echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr align 'center'><td bgcolor='yellow'>cadena</td>";
echo "<td>$cadena</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>substr_count(cadena,'a')</td>";
echo "<td>".substr_count($cadena,$patron1)."</td></tr>";
//echo "<tr align 'center'><td bgcolor='yellow'>reemplazo</td>";
//echo "<td>$reemplazo</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>substr_count(cadena,'as')</td>";
echo "<td>".substr_count($cadena,$patron2)."</td></tr>";
echo "</table>";


?>


</center>
</body>
</html>