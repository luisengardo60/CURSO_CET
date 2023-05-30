<html><head><meta charset="utf-8"> </head>
<body>
<?php
//Ejemplo aprenderaprogramar.com
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Gerencia: ".$resultados['gerencia']."<br/> ";
echo "- Nombre: ".$resultados['nombre']."<br/>";
echo "- Supervisor: ".$resultados['supervisor']."<br/>";
echo "- Sexo: ".$resultados['sexo']."<br/>";
echo "- Nacimiento: ".$resultados['nacimiento']."<br/>";
echo "- Antiguedad: ".$resultados['antiguedad']."<br/>";}
else {echo "<br/>No hay más datos: <br/>".$resultados;}
}
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "curso_php");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM nomina_2");
$extraido1= mysqli_fetch_array($result);
mostrarDatos($extraido1);
$extraido2= mysqli_fetch_array($result);
mostrarDatos($extraido2);
$extraido3= mysqli_fetch_array($result);
mostrarDatos($extraido3);
$extraido4= mysqli_fetch_array($result);
mostrarDatos($extraido4);
$extraido5= mysqli_fetch_array($result);
mostrarDatos($extraido5);
$extraido6= mysqli_fetch_array($result);
mostrarDatos($extraido6);
mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html