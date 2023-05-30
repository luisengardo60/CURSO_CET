<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<center>
<?php
$metodo=$_SERVER['REQUEST_METHOD'];
$cadena_consulta=$_SERVER['QUERY_STRING'];
echo "<h2>Método de formulario: $metodo</h2>";
echo "<i>Query string</i>: $cadena_consulta<hr>";
echo "$_POST[modelo] $_POST[marca] $_POST[motor] $_POST[cc] <hr>";
$pericos= $_POST['periquitos'];
foreach($pericos as $clave=>$valor){
echo "<br>clave: ".$clave."<br>";
echo "<br>valor: ".$valor."<br>";
}
echo "<hr>";
?>
</center>
</body>
</head>
</html>