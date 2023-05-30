<html>
<head>
<Title>Trabajando con include</title>
</head>
<body>
<center>
<h1>Inclusión de ficheros. Llamados múltiples a rutinas inc</h1>
<?php
$fichero="";
for ($i=1;$i<5;$i++){
	$fichero="capitulo_3_tema_25_acumular".$i.".inc";
	$numero=$i;
	include($fichero);
}
?>
</center>
</body>
</html>