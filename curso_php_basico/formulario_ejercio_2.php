<html>
<head>
<title>Proyecto ejercicio curso PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<h2>Ciudades a calcular el rango </h2><hr>
<form action="proyecto_v2_post.php" method="POST">
<table>
	<tr>
<td align="left"><b><font color="red">Selección de ciudades:<font color="black"></b></td>
<td align="right" colspan="3" rowspan="1">
<br>
<br> 
Maracaibo <input type="checkbox" name="ciudad[]" value="Maracaibo" /> <br> 
Coro <input type="checkbox" name="ciudad[]" value="Coro" /><br> 
Mérida <input type="checkbox" name="ciudad[]" value="Merida" /><br> 
Trujillo <input type="checkbox" name="ciudad[]" value="Trujillo" /><br> 
Puerto La Cruz <input type="checkbox" name="ciudad[]" value="Puerto_La_Cruz" /><br>
Caracas <input type="checkbox" name="ciudad[]" value="Caracas" /> <br> 
Ciudad Bolivar <input type="checkbox" name="ciudad[]" value="Ciudad_Bolivar" /><br> 
San Cristobal <input type="checkbox" name="ciudad[]" value="San_Cristobal" /><br> 
Porlamar <input type="checkbox" name="ciudad[]" value="Porlamar" /><br> 
Maracay <input type="checkbox" name="ciudad[]" value="Maracay" /><br>
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
<input type="submit"><input type="reset">
</form>
</center>
</body>
</head>
</html>