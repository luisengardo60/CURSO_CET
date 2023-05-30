<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función str_pad_right(cadena,long,car), str_pad_left(cadena,long,car),str_pad_both(cadena,long,car)</h1>
<h1>Relleno de cadena</h1>
<?php
$cadena='0123456789';
$long=20;
$car=".";
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>str_pad_(cadena,20,'.')</td>";
echo "<td><pre>".str_pad($cadena,$long,'.')."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>str_pad_(cadena,20,'.',STR_PAD_RIGHT)</td>";
echo "<td><pre>".str_pad($cadena,$long,'.',STR_PAD_RIGHT)."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>str_pad_(cadena,20,'.',STR_PAD_LEFT)</td>";
echo "<td><pre>".str_pad($cadena,$long,'.',STR_PAD_LEFT)."</pre></td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>str_pad_(cadena,20,'.',STR_PAD_BOTH)</td>";
echo "<td><pre>".str_pad($cadena,$long,'.',STR_PAD_BOTH)."</pre></td></tr>";
echo "</table>";
?>
</center>
</body>
</html>