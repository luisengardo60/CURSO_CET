<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strtolower(cadena), strtoupper(cadena),ucfirst(cadena),ucwords(cadena)</h1>
<h1>Conversión entre mayúsculas y minúsculas</h1>
<?php
$cadena='saludos PARA todos....';
$long=20;
$car=".";
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>strtolower($cadena)</td>";
echo "<td><pre>".strtolower($cadena)."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>strtoupper($cadena)</td>";
echo "<td><pre>".strtoupper($cadena)."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>ucfirst($cadena)";
echo "<td><pre>".ucfirst($cadena)."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>ucwords($cadena)</td>";
echo "<td><pre>".ucwords($cadena)."</pre></td></tr>";
echo "</table>";
?>
</center>
</body>
</html>