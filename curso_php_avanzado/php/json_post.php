<!Doctype html>
<html>
<body>
	<h2> convierte un objeto java script en cadena y lo envía al servidor</h2>
	<?php
	$x=$_REQUEST['x'];

$x=str_replace('"',"",$x);
$x=str_replace(':',",",$x);
$x=str_replace('{',"",$x);
$x=str_replace('}',"",$x);
//echo $x;
$productos=explode(",",$x);
echo $productos[1].", de ".$productos[5].", tiene una edad de ".$productos[3];
?>
	
</body>
</html>