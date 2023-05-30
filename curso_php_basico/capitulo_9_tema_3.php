<html>
<head>
<title> Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
<center>
<h2>Formularios:Método GET</h2><hr>
<form action="capitulo_9_tema_3_get.php" method="GET">
<table>
<tr align="left">
<td align="left">Modelo:</td>
<td align="right" colspan="3">
<input type="text" name="modelo"  size="26"></td>
</tr>
<tr  align="left" >
<td align="left">Marca:</td>
<td align="right" colspan="3">
<input type"text" name="marca" size="26">
</td>
</tr>
<tr align="left">
<td >Motor:</td>
<td > <input type="text" name="motor" size="5"></td>
<td >Cilindrada:</td>
<td><input type="text" name="cc" size="5"></td>
</tr>
<tr>
<td align="left">Combustible:</td>
<td align="right" colspan="3">
<input type="radio" name="combustible" value="gasolina" checked>Gasolina
<input type="radio" name="combustible" value="diesel">Diesel
</td>
</tr>

</table><hr><br>
<input type="submit"><input type="reset">

</form>
</center>
</body>
</head>
</html>