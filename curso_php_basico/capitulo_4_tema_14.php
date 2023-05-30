<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strtr y str_replace</h1>
<?php
$cadena="muurciélago";
$patron='agu';
$reemplazo="ARU";

echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr align 'center'><td bgcolor='yellow'>cadena</td>";
echo "<td>$cadena</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>patrón</td>";
echo "<td>$patron</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>reemplazo</td>";
echo "<td>$reemplazo</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>strtr(cadena,patron,reemplazo)</td>";
echo "<td>".strtr($cadena,$patron,$reemplazo)."</td></tr>";
echo "</table>";
echo "<br>".strtr("Hilla Warld","ia","eo")."<br>";

?>

<?php
$matriz=array("a"=>"A","g"=>"G","u"=>"U");


echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr align 'center'><td bgcolor='yellow'>cadena</td>";
echo "<td>$cadena</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>matriz</td>";
echo "<td>".$matriz['a'].",".$matriz['g'].",".$matriz['u']."</td></tr>";

echo "<tr align 'center'><td bgcolor='yellow'>strtr(cadena,matriz)</td>";
echo "<td>".strtr($cadena,$matriz)."</td></tr>";
echo "</table>";

echo "<br>";

$cadena="el murciélago vuela sobre el lago";
$cadena_a='lago';
$cadena_b="LAGO";

echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr align 'center'><td bgcolor='yellow'>cadena</td>";
echo "<td>$cadena</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>patrón</td>";
echo "<td>$cadena_a</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>reemplazo</td>";
echo "<td>$cadena_b</td></tr>";
echo "<tr align 'center'><td bgcolor='yellow'>str_replace(patrón, reemplazo,cadena)</td>";
echo "<td>".str_replace($cadena_a,$cadena_b,$cadena)."</td></tr>";
echo "</table>";


?>
</center>
</body>
</html>