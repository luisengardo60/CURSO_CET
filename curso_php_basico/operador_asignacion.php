<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title><h2><em><strong>Ooperadores</strong></em></h2></title>
<body>
	<center>
		<h2><em><strong>Operadores Aritméticos y de Asignación</strong></em></h2>
		<?php
		define("euro",166.386);
		echo "El valor de la constante 'euro' es: <b>".euro." pts.</b><br><br>";
		echo "1000 euros son ".(euro*1000)." pts<br>";
		echo "1000pts. son  ".(intval((1000/euro)*100)/100)."euros<br><br>";
		echo "157 euros son ".intval(157/50)." billetes de 50 euros";
		echo " y ".(157%50)." euros";
		echo "<br><br>";
		echo " Prueba con Operador de asignación. Con todos es igual. <em><strong>Ver el código:</strong></em><br><br>";
		$texto="157 euros son: ";
		$valor=intval(157/50);
		$texto.=$valor." billetes de 50 euros";
		echo $texto;
		//intval((1000/euro)*100)/100
		?>
	</center>
</body>
</html>