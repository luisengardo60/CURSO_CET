<html>
<head>
<title>Proyecto ejercicio curso PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<h2>Temas o prácticas a seleccionar: </h2><hr>
<form action="indice_post.php" method="POST">
<table>
	<tr>
<td align="left"><b><font color="red">Selección de Teoría/evaluaciones:<font color="black"></b></td>
<td align="right" colspan="3" rowspan="1">
<br>
<br> 
Teoría de archivos <input type="checkbox" name="sel[]" value="A1" /> <br> 
Filtros <input type="checkbox" name="sel[]" value="A2" /><br> 
Comandos Mysql <input type="checkbox" name="sel[]" value="A3" /><br> 
Teoría POO <input type="checkbox" name="sel[]" value="A4" /><br>
Teoría de XML <input type="checkbox" name="sel[]" value="A5" /><br> 
Teoría de SAX <input type="checkbox" name="sel[]" value="A6" /><br>
Teoría de DOM<input type="checkbox" name="sel[]" value="A7" /> <br> 
Teoría de AJAX <input type="checkbox" name="sel[]" value="A8" /><br> 
Teoría de JSON <input type="checkbox" name="sel[]" value="A9" /><br> 
Patrones de Diseño en PHP <input type="checkbox" name="sel[]" value="A10" /><br> 
Prácticas/evaluaciones <input type="checkbox" name="sel[]" value="A11" /><br>
<!--Práctica #2 <input type="checkbox" name="sel[]" value="A12" /><br>
Práctica #3 <input type="checkbox" name="sel[]" value="A13" /><br>
Práctica #4 <input type="checkbox" name="sel[]" value="A14" /><br>-->
</td>
</tr>
<tr>
<td align="left"><b><font color="blue">Alternativa:<font color="black"></b></td>
<td align="right" colspan="3">
<input type="radio" name="sitios" value="todos">Todos los item
<input type="radio" name="sitios" value="nada" checked>selección
</td>
</tr>
</table><hr><br>
<input type="submit" value="enviar"><input type="reset" value="limpiar">
</form>
</center>
</body>
</head>
</html>