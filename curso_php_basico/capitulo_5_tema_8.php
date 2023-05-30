<HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
	<h2> ordenar arreglos</h2>
 <?php
$cars = array("Volvo", "BMW", "Toyota");
$cars2=$cars;
sort($cars);
$clength = count($cars);
echo "<h1>ordenamiento de un arreglo:</h1>";
echo "<br>";
echo "arreglo original<br>";
for($x = 0; $x < $clength; $x++) {
echo $cars2[$x];
echo "<br>";
}
echo "<br>";
echo "ascendente<br>";
for($x = 0; $x < $clength; $x++) {
echo $cars[$x];
echo "<br>";
}
echo "<br>";
echo "descendiente<br>";
$cars=$cars2;
rsort($cars);
for($x = 0; $x < $clength; $x++) {
echo $cars[$x];
echo "<br>";
}
?>
<CENTER>
</BODY>
</HTML>