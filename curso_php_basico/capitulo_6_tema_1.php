<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Paso de parámetros</i><h2>
		<?php
		function cuentaAtras($inicio){
			for ($i=$inicio;$i>0;$i--)
				echo $i."....<br>";
			echo "¡Boooooommm!";
		}
		?>
		<table border='0' cellpadding= '4' cellspacing='6'>
			<tr align='center'>
				<TD BGCOLOR='green'>
					<?php
					cuentaAtras(8);
					?>
				</td>
				<td bgcolor='yellow'>
					<?php
					cuentaAtras(5);
					?>
				</td>
			</tr>
		</table>
	</center>
	</html>