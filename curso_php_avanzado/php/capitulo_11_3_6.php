<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2>Trabajando con SimpleXML</h2>
	<h3>Obteniendo los atributos de un elemento</h3>
	<table border="1" cellpadding='4'>
		
	<?php
	if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml')){
		$libros=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
		
	}else{
		die('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
	}
	echo "<tr bgcolor=yellow>";
	echo "<td>Método atributes</td>";
	echo "<td>Tratamiento arreglo</td>";
	echo "</tr>";
	foreach ($libros->attributes() as $atributo=>$valor){
		echo '<tr>';		
			echo "<td>".$atributo." = ".$valor."</td>";
		}		
		echo "<td> sitio= ".$libros['sitio']."</td>";
		echo '</tr>';	
		?>
</table>
</center>
</body>
</html>