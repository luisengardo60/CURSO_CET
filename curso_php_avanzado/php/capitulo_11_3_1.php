<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2>Trabajando con SimpleXML</h2>
	<table border='1' cellpadding='4'>
		<tr><td>
	<?php
	if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml')){
		$libros=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
		print_r($libros);
	}else{
		die('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
	}
	?>
</td></tr></table>
</center>
</body>
</html>