<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función <I>chunk split y split</I></h1>
<h1>División de Cadenas</h1>
<?php
$cadena='El murciélago vuela en el lago';
$long=5;
$sep="-";
$cadena_aux=chunk_split($cadena,$long,$sep);
$productos=explode($sep,$cadena_aux);

//La instrucción split está en desuso. Se utiliza Explode
//que almacena la cadena en un arreglo vectorial.
//útil para leer archivos planos o matrices en excel
echo "<table border='1' cellpadding= '2' cellspacing='2'>";
echo "<tr ><td bgcolor='yellow'>cadena</td>";
echo "<td><pre>$cadena</pre></td></tr>";
echo "<tr ><td bgcolor='yellow'>chunk_split(cadena,$long,'$sep')</td>";
echo "<td><pre>$cadena_aux</pre></td></tr>";
echo "<tr align='center'>";
echo "<td colspan='2' bgcolor='yellow'> explode('$sep',chunk_split($cadena,$long,'$sep'))</td></tr>";
for ($si=0;$si<count($productos)-1;$si++){
echo "<tr align='center'><td>$si</td>";
echo "<td><pre>$productos[$si]</pre></td></tr>";
}
echo "</table>";
?>
</center>
</body>
</html>