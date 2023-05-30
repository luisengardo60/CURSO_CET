<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Rutina principal que realiza llamados en bucles a varios programas .inc </h1>
<?php
if(!isset($numero))
   $numero=10;
echo "<br><b>$numero!  </b>";
$sumatorio=0;
do{
	echo $numero." + ";
	$sumatorio+=$numero;
	$numero--;	
}while($numero>0);
echo "0 = <b>$sumatorio</b>";
?>
</center>
</body>
</html>