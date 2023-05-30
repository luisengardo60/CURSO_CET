<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función <I>strtok</I></h1>
<h1>División de Cadenas</h1>
<?php
$cadena='dato1;dato2;dato3;dato4;dato5';
$patron=';';
$datos=strtok($cadena,$patron);
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></td></tr>";
echo "<tr align='center'>";
echo "<td colspsn='2' bgcolor='yellow'> substr_count(cadena,'$patron')</td>";
echo "<td><pre>".substr_count($cadena,$patron)."</pre></td></tr>";
echo "</tr>";
while ($datos){
echo "<tr align 'center'><td bgcolor='yellow'>subcadena</td>";
echo "<td><pre>".$datos."</pre></td></tr>";
$datos=strtok($patron);
}
echo "</table>";
?>
</center>
</body>
</html>