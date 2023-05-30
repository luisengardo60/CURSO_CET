<html>
<head>
	<!--Campos de la Matriz-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<center>
	<h2><b> Primer proyecto curso basico PHP</b><h2>
		<?php
			// Velocidad_Down
			// j = Columna, i = fila [] { }
			
			for ($j=0;$j<5;$j++){
				switch ($j) {
					case '0':
						$min=2000000;
						$max=10000000;
						break;
						case '1':
						$min=500000;
						$max=1000000;
						break;
						case '2':
						$min=20;
						$max=180;
						break;
						case '3':
						$min=1;
						$max=100;
						break;
						case '4':
						$min=2;
						$max=50;
						break;
				}
				for ($i=0;$i<100;$i++){

				$matriz[$i][$j]=mt_rand($min,$max);
				echo $matriz[$i][$j].";";
				}	
				
				echo "<br>";
			}

								?>
			
			</center>
		</body>
	</head>
</html>