<html>
<head>
<title> Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<h2>Formularios:Método POST</h2><hr>
<form action="formulario_avanzado_3_post.php" method="POST">
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
<td align="left">Opciones:</td>
<td align="right" colspan="3" rowspan="1">
<br>
<br> 
Aire Acondicionado <input type="checkbox" name="periquitos[]" value="AA" /> <br> 
Reproductor <input type="checkbox" name="periquitos[]" value="RP" /><br> 
Climatización <input type="checkbox" name="periquitos[]" value="CM" /><br> 
Sistema Navegación <input type="checkbox" name="periquitos[]" value="SN" /><br> 
Caucho Repuesto <input type="checkbox" name="periquitos[]" value="CR" /><br>

</td>
</tr>

</table><hr><br>
<input type="submit"><input type="reset">

</form>
</center>
</body>

</html>
