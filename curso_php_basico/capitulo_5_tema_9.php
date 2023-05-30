 <HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
	<h2> Ordenamiento por clave y valor<h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"52", "Joe"=>"43");
$age2=$age;
asort($age2);
echo "<font color='blue'>vector original</font>";
echo "<br>";
echo "<font color='black'></font>";
foreach($age as $x => $x_value)
{
		echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
echo "<br>";
echo "<font color='blue'>vector ordenado ascendente por el valor con asort():<br></font>";

echo "<font color='black'></font>";
foreach($age2 as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
$age2=$age;
ksort($age2);
echo "<br>";
echo "<font color='blue'>vector ordenado ascendente por la clave con ksort():<br></font>";

echo "<font color='black'></font>";
foreach($age2 as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
$age2=$age;
arsort($age2);
echo "<br>";
echo "<font color='blue'>vector ordenado descendente por el valor con arsort():<br></font>";

echo "<font color='black'></font>";
foreach($age2 as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
$age2=$age;
krsort($age2);
echo "<br>";
echo "<font color='blue'>vector ordenado descendente por la clave con krsort():<br></font>";
echo "<font color='black'></font>";
foreach($age2 as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
?>
<CENTER>
</BODY>
</HTML>