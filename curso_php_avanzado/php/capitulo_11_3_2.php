<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2>Trabajando con SimpleXML</h2>
	<h3>Recuperando datos del primer registro</h3>
	<table border="1" cellpadding='4'>
		<tr>
	<?php
	if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml')){
		$libros=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
		
	}else{
		die('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
	}
	echo '<td>'.$libros->libro[0]->titulo.'</td>';
	echo '<td>'.$libros->libro[0]->autor.'</td>';
	echo '<td>'.$libros->libro[0]->fecha.'</td>';
	echo '<td>'.$libros->libro[0]->precio.'</td>';
	?>
</tr></table>
</center>
</body>
</html>