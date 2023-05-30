<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función chop(cadena), rtrim(),ltrim(), trim()</h1>
<h1>Limpieza de cadena</h1>
<?php
$cadena='         abcdefghi    ';
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td colspan=2>&nbsp;</td>";
echo "<td bgcolor='yellow'>tamaño</td></tr>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></><td>".strlen($cadena)."</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>chop('cadena')</td>";
echo "<td><pre>".chop($cadena)."</pre></td><td>".strlen(chop($cadena))."</td></tr>";
echo "<tr ><td bgcolor='yellow'>rtrim('cadena')</td>";
echo "<td><pre>".rtrim($cadena)."</pre></td><td>".strlen(rtrim($cadena))."</td></tr>";
echo "<tr ><td bgcolor='yellow'>ltrim('cadena')</td>";
echo "<td><pre>".ltrim($cadena)."</pre></td><td>".strlen(ltrim($cadena))."</td></tr>";
echo "<tr ><td bgcolor='yellow'>trim('cadena')</td>";
echo "<td><pre>".trim($cadena)."</pre></td><td>".strlen(trim($cadena))."</td></tr>";
echo "</table>";
?>
</center>
</body>
</html>