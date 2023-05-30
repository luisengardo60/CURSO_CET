<HTML>
<HEAD>
<TITLE>Actualizar_2_mysql.php</TITLE>
</HEAD>
<BODY>
<?php
//Conexion con la base
$link=mysqli_connect("localhost","root","");

//selección de la base de datos con la que vamos a trabajar 
mysqli_select_db($link,"curso_php"); 
//Creamos la sentencia SQL y la ejecutamos
echo "la informacion...<br>";

$s2=$_POST['supervisor2'];
$n2=$_POST['nombre2'];

echo $s2;
echo "<br>";
echo $n2;

$sSQL="Update nomina_2 Set supervisor='$s2' Where nombre='$n2' "  ;
mysqli_query($link,$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>


</BODY>
</HTML