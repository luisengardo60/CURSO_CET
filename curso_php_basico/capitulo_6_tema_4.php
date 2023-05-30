<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Devolución de valores</i><h2>
		<?php
		
		$mifinal=0;
		function elMayor($dato1,$dato2,$dato3){
			$elMayor=($dato1>$dato2)?$dato1:$dato2;
			$elMayor=($elMayor>$dato3)?$elMayor:$dato3;
			return $elMayor;
		}
		
		?>
		<table border="0" cellpadding="4" cellspacing="6">
			<tr align="center">
				<td bgcolor="green">
					<?php
					echo "el mayor de 17,5 y 9 es <br><h2>".elMayor(17,5,9)."</h2>";
					
					?>					
				</td>
				
				</tr>
		</table>
	</center>
	</html>