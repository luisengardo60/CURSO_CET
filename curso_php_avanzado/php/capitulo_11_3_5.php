<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2>Trabajando con SimpleXML</h2>
	<h3>Bucle equivalente para obtener todos los registros</h3>
	<table border="1" cellpadding='4'>
		
	<?php
	if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml')){
		$libros=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
		
	}else{
		die('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
	}
	echo "<tr bgcolor=yellow>";
	echo "<td>Título</td>";
	echo "<td>Autor</td>";
	echo "<td>Fecha</td>";
	echo "<td>Precio</td>";
	echo "</tr>";
	foreach ($libros->libro as $libro){
		echo '<tr>';
		foreach ($libro as $valor) {
			echo "<td>".$valor."</td>";
		}
		echo '</tr>';
		
	}
		?>
</table>
</center>
</body>
</html>