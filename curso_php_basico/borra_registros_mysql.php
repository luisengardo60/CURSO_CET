<?php //Ejemplo curso PHP aprenderaprogramar.com
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link, "curso_php");
mysqli_query( $link,("DELETE FROM nomina_2 WHERE nombre='franklin'"));
mysqli_close($link); // Cerramos la conexion con la base de datos
echo 'Se ha ejecutado la consulta sobre la base de datos...';
?>
