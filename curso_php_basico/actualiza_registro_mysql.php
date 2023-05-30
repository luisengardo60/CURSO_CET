<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?php
//Conexion con la base
$link=mysqli_connect("localhost","root","");
//selección de la base de datos con la que vamos a trabajar 
mysqli_select_db($link,"curso_php"); 
echo '<FORM METHOD="POST" ACTION="actualiza_registro_mysql_2.php">Nombre<br>';
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select nombre,supervisor From nomina_2 Order By nombre";
$result=mysqli_query($link,$sSQL);
echo '<select name="nombre2">';
//Generamos el menu desplegable

while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["nombre"];}

echo "</select>";
?>
<br>
Supervisor<br>
<INPUT TYPE="TEXT" NAME="supervisor2"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>

</BODY>
</HTML>