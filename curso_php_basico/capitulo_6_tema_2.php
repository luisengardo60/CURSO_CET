</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Paso de lista de parámetros o constantes</i><h2>
		<?php
		define('Fin_Cuenta',0);
		$mifinal=3;
		function cuentaAtras($inicio,$fin,$prueba){
			for(;$inicio>$fin;$inicio--)
				echo $inicio."...<br>";
			echo "¡Booooooommm!";
			$prueba--;
			echo "<br>";
			echo $prueba;
		}
		
		?>
		<table border="0" cellpadding="4" cellspacing="6">
			<tr align="center">
				<td bgcolor="green">
					<?php
					$prueba=8;
					cuentaAtras(11,$mifinal,$prueba);
						echo "<br>";
					echo $prueba;
					?>					
				</td>
				<td bgcolor="yellow">
					<?php
					$prueba=9;
					cuentaAtras(8,Fin_Cuenta,$prueba);
					echo "<br>";
					echo $prueba;
					?>					
				</td>
				</tr>
		</table>
	</center>
	</html>