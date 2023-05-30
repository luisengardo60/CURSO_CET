<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html> 
 <head>
 <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type"> 
 <title><h1>valores asociativos en arreglos</h1></title>
 </head>
 <center>
 	<h3>Nombre:capitulo2_tema_12</h3>
<body>
	<?php
	 $v[1]=90;
	 $v[30]=7;
	 $v['e']=99;
	 $v['hola']=43;
foreach ($v as $indice => $valor) {
echo "indice: " .$indice." valor: ".$valor."<br>";
echo "--------------------<br>";
 }
?>
</center>
</body>
</html>
