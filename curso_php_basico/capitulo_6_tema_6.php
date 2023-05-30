<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<title>Trabajando con funciones</title>
<center>
	<h2><i>Funciones variables</i><h2>
		<?php
		$array_func=array("aEuros","aDolares","aYens");
		$precios=array(1000,2300,7000);

		function aEuros($dato){
			
			 $resultado=($dato/166.386);
			$resultado2=number_format($resultado, 2, ",", ".");
			 return $resultado2;
			
		
		}
		function aDolares($dato){
			 $resultado=($dato/195.6);
			$resultado2= number_format($resultado, 2, ",", ".");
			return $resultado2;
			
		
		}
		function aYens($dato){
			 $resultado=($dato/206.36);
			 $resultado2=number_format($resultado, 2, ",", ".");
			return $resultado2;
			
		
		}

					
		?>		

		<table border="1" cellpadding="2" cellspacing="2">
		<tr align "center" bgcolor="yellow">
		<td> Pesetas </> <td> Dólares </> <td> Euros </><td> Yens </>  
		</tr>
		<?php
		for($i=0;$i<sizeof($precios);$i++){
			echo "<tr align=center>";
			echo "<td>". $precios[$i]. "</td>";
			for ($j=0;$j<sizeof($array_func);$j++){

			$funcion=$array_func[$j];
			echo "<td>".$funcion($precios[$i])."</td>";
				
			}
				echo "</tr>";
		}


		?>			
				
	</center>
	</html>