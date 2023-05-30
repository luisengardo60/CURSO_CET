<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Funciones con número variable de parámetros</i><h2>
		<?php
		
		function elMayor(){
$num_args=func_num_args();
$args=func_get_args();
$dato1=$args[1];
$dato2=$args[2];
$elMayor=$dato1;
for($i=2;$i<$num_args;$i++)
$elMayor=($elMayor>$args[$i])?$elMayor:$args[$i];
return $elMayor;


		}
		
		?>
		<table border="0" cellpadding="4" cellspacing="6">
			<tr align="center">
				<td bgcolor="green">
					<?php
					echo "el mayor de 17,5,34, 10, 29,31 es <br><h2>".elMayor(17,5,34, 10, 29,31)."</h2>";
					echo "<br>";
					echo "el mayor de 30,15,2,89,10,88 es <br><h2>".elMayor(30,15,2,89,10,88,100,200,48)."</h2>";

					
					?>					
				</td>
				
				</tr>
		</table>
	</center>
	</html>