<html>
<head>
<title>Proyecto ejercicio curso PHP_Nivel_Medio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<h2><h2><strong>Estado de Internet en Venezuela (ABA)</font></strong> </h2><hr>
<form action="accion_post.php" method="POST">
<table>
	<tr>
<td align="left"><b><font color="red">Selección de acciones a realizar:<font color="black"></b></td>
<td align="right" colspan="3" rowspan="1">
<br>
<br> 
Generacion de archivos <input type="checkbox" name="sel[]" value="A1" /> <br> 
Actualizar Mysql <input type="checkbox" name="sel[]" value="A2" /><br> 
Generacion de reporte <input type="checkbox" name="sel[]" value="A3" /><br> 
</td>
</tr>
<tr>
<td align="left"><b><font color="blue">Alternativa:<font color="black"></b></td>
<td align="right" colspan="3">
<input type="radio" name="acciones" value="todos">Todos los item
<input type="radio" name="acciones" value="algo" checked>selección
</td>
</tr>
</table><hr><br>
<input type="submit" value="enviar"><input type="reset" value="limpiar">
</form>
</center>
</body>
</head>
</html>