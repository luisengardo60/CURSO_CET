<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Teoría General, Doc completo</title>
<body>
	<center>
		<h2> Teoría Archivos<h2>
			 
			<table border=2px>
				
					<?php
					
					if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml')){
                     $teoria=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml');
 
 echo "<h2> Teoría Archivos<h2>";
	 
	echo "<table border=2px>";
for($cont=0;$cont<8;$cont++){
	echo "<tr><td><pre>";
                     print_r($teoria->archivos->tema[$cont]);
                     echo "</pre></td></tr>";
}
 echo "<table>";
                     }
                 else{
                 	die('No se encuentra el archivo C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml');
                 }

                
                    ?>
                    
                
	</center>

	<center>
		<h2> Teoría Mysql<h2>
			 
			<table border=2px>
				
					<?php
					
					if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml')){
                     $teoria=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml');
                     echo "<tr><td><pre>";
                     print_r($teoria->mysql);
                     echo "</pre></td></tr></table>";
                     }
                 else{
                 	die('No se encuentra el archivo C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml');
                 }

                
                    ?>
                    
                
	</center>
	</body>
	</html>
