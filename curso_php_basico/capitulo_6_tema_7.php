<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>

	<h2><i>Funciones recursivas</i><h2>	
		<?php
		function factorial($numero){
			if ($numero==0) return 1;
			return $numero*factorial($numero-1);
		}


function factor_iterativo($numero){
 echo "$numero!=  ";
 for ($factorial=1;$numero>1;$numero--){
 	$factorial*=$numero;
 	echo "$numero x ";
 }
 echo "1 es igual a $factorial";

}
?>

<table border="1" cellpadding="2" cellspacing="2">
	<tr align ="center" bgcolor="yellow">
		<td> Num </td>
		<td> F. recursiva </td>
		<td> Función no recursiva </td>
	</tr>

	<tr align="center">
		<td>2</td>
		<td><?php echo factorial(2); ?></td>
		<td><?php echo factor_iterativo(2); ?></td>
	</tr>
	<tr align="center">
		<td>3</td>
		<td><?php echo factorial(3); ?></td>
		<td><?php echo factor_iterativo(3); ?></td>
	</tr>
	<tr align="center">
		<td>4</td>
		<td><?php echo factorial(4); ?></td>
		<td><?php echo factor_iterativo(4); ?></td>
	</tr>
	<tr align="center">
		<td>5</td>
		<td><?php echo factorial(5); ?></td>
		<td><?php echo factor_iterativo(5); ?></td>
	</tr>

</table>


	</center>
	</html>