<html>
<head>
	<title>Proyecto ejercicio curso PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<center>
		<h2>Tiempos a calcular el rango: </h2><hr>
		<form action="proyecto_post_v2.php" method="POST">
			<table>
				<tr>
					<td align="left"><b><font color="red">Selección de tiempos:<font color="black"></b></td>
					<td align="right" colspan="3" rowspan="1">
						<br>
						<br> 
						<select multiple="multiple" name="tiempos[]" size="10">
							<!--<option selected value="0">tiempos:</option>-->
							<?php
							for ($i=0;$i<100;$i++){
								?>
								<!--<option selected value="<?php print $i;?>"><?php echo "tiempo_".$i?>-->
								<option  value="<?php print $i;?>"><?php echo "tiempo_".$i?>

									<?php } ?>
								</select>
							</select>
						</tr>
						<tr>
							<td align="left"><b><font color="blue">Alternativa:<font color="black"></b></td>
							<td align="right" colspan="3">
								<input type="radio" name="tiempo" value="todos" checked>Todos los intervalos
								<input type="radio" name="tiempo" value="nada">Seleccione tiempos en menú
							</td>
						</tr>
					</table><hr><br>
					<input type="submit" value="enviar"><input type="reset" value="limpiar">
				</form>
			</center>
		</body>
	</head>
</html>