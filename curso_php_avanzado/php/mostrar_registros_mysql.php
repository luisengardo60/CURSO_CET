<html><head><meta charset="utf-8"> </head>
<center>
	<h1><b> Mostrar Registros</b></h1>
<body>
<?php
//Ejemplo aprenderaprogramar.com

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "curso_php");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM nomina_2");
echo "<TABLE BORDER='1' width=50% align=center>";
echo "<TR align='center'><TD><b>Gerencia</b></TD><TD><b>Nombre</b></TD><td><b>Supervisor</b></td><td><b>Sexo</b></td><td><b>Nacimiento</b></td><td><b>Antiguedad</b></td></TR>";
while ($row=mysqli_fetch_array($result))	
	{echo "<TR><TD>".$row['gerencia']."</TD><TD>".$row['nombre']."</TD><td>".$row['supervisor']."</td><td>".$row['sexo']."</td><td>".$row['nacimiento']."</td><td>".$row['antiguedad']."</td></TR>";}
echo "</TABLE>";
?>
</center>
</body>
</html