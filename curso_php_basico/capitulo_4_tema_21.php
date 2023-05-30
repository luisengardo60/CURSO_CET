<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función <I>Explode e Implode</I></h1>
<h1>División y unificación de Cadenas</h1>
<?php
$patron="-";
$nexo=":";
$limite=4;
$cadena='dato1-dato2-dato3-dato4-dato5-dato6';
$datos=explode($patron,$cadena,$limite);
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></td></tr>";
echo "<tr align='center'>";
echo "<td colspan='2' bgcolor='yellow'> explode('$patron',cadena,$limite)</td>";
echo "</tr>";
for ($si=0;$si<$limite;$si++){
echo "<tr align='center'><td>$si</td>";
echo "<td><pre>$datos[$si]</pre></td></tr>";
}
echo "<tr ><td bgcolor='yellow'>


implode('$nexo',datos)</td>";
echo "<td><pre>".implode($nexo,$datos)."<pre></td></tr>";
echo "</table>";
?>
</center>
</body>
</html>