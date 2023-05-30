<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Paso de parámetros por valor, referencia y defecto</i><h2>
		<?php
		
		$mifinal=0;
		function cuentaAtras($inicio,&$fin,$mensaje="¡Booooooommm!"){
			for(;$inicio>$fin;$inicio--)
				echo $inicio."...<br>";
			
			$fin=$fin+2;
			echo $mensaje;
		}
		
		?>
		<table border="0" cellpadding="4" cellspacing="6">
			<tr align="center">
				<td bgcolor="green">
					<?php
					//$mifinal vale 0
					echo $mifinal;
					echo "<br>";
					cuentaAtras(11,$mifinal);
					//$mifinal vale 2
					echo "<br>";	
					echo $mifinal;
					echo "<br>";
					
					?>					
				</td>
				<td bgcolor="yellow">
					<?php
					//$mifinal vale 2
					echo $mifinal;
					echo "<br>";
					cuentaAtras(8,$mifinal,"¡Despierta curso!");
					//$mifinal vale 4
					echo "<br>";
					echo $mifinal;
					
					
					?>					
				</td>
				</tr>
		</table>
	</center>
	</html>