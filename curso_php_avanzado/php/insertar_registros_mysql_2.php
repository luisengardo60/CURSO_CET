<html>
<head>
<TITLE>PHP y Mysql</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<body>
<center>
<h1>Insertar registros</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso_php";
// Create connection
$conn=mysqli_connect($servername,$username,$password)or die ('ha fallado la conexion:'.mysql_error());
mysqli_select_db($conn,$dbname)or die ('ha fallado la conexion2:'.mysqli_error());
$sql = "INSERT INTO nomina_2 (gerencia,nombre,supervisor,sexo,nacimiento,antiguedad)
VALUES ('$_POST[gerencia]', '$_POST[nombre]', '$_POST[supervisor]','$_POST[sexo]','$_POST[nacimiento]','$_POST[antiguedad]')";
if (mysqli_query($conn,$sql)) {
	echo "New record created successfully. Ultimo registro insertado";
} else 
{
echo ("Error: ".$sql."<br>". mysqli_error($conn));
}
?> 
</center>
</body>
</html>