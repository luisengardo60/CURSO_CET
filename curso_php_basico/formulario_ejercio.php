<html>
<head>
<title>Proyecto ejercicio curso PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<h2>Ciudades a calcular el rango </h2><hr>
<form action="proyecto_post.php" method="POST">
<table>
	<tr>
<td align="left"><b><font color="red">Selección de ciudades:<font color="black"></b></td>
<td align="right" colspan="3" rowspan="1">
<br>
<br> 
Maracaibo <input type="checkbox" name="ciudad[]" value="A1" /> <br> 
Coro <input type="checkbox" name="ciudad[]" value="A2" /><br> 
Mérida <input type="checkbox" name="ciudad[]" value="A3" /><br> 
Trujillo <input type="checkbox" name="ciudad[]" value="A4" /><br> 
Puerto La Cruz <input type="checkbox" name="ciudad[]" value="A5" /><br>
Caracas <input type="checkbox" name="ciudad[]" value="A6" /> <br> 
Ciudad Bolivar <input type="checkbox" name="ciudad[]" value="A7" /><br> 
San Cristobal <input type="checkbox" name="ciudad[]" value="A8" /><br> 
Porlamar <input type="checkbox" name="ciudad[]" value="A9" /><br> 
Maracay <input type="checkbox" name="ciudad[]" value="A10" /><br>
</td>
</tr>
<tr>
<td align="left"><b><font color="blue">Alternativa:<font color="black"></b></td>
<td align="right" colspan="3">
<input type="radio" name="sitios" value="todos" checked>Todas las ciudades
<input type="radio" name="sitios" value="nada">Selección
</td>
</tr>
</table><hr><br>
<input type="submit" value="enviar"><input type="reset" value="limpiar">
</form>
</center>
</body>
</head>
</html>