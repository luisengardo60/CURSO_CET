<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2>Trabajando con SimpleXML</h2>
	<h3>Forma equivalente de recuperar la misma información de un registro</h3>
	<table border="1" cellpadding='4'>
		
	<?php
	if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml')){
		$libros=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
		
	}else{
		die('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/libros.xml');
	}
	foreach ($libros->libro[0] as $prop =>$valor){
		echo '<tr>';
		echo '<td bgcolor="yellow">'.$prop.'</td>';
		echo '<td>'.$valor.'</td>';
	}
		?>
</table>
</center>
</body>
</html>