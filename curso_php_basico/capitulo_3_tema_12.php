<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencias de bucles  <I>for</></h1><br>
<h1>Bucles anidados   <I>for</></h1>
<?php
echo "<table border='1'>";
for ($fila=1;$fila<=10;$fila++){
  echo "<tr align 'center'>";
  for ($columna=1;$columna<=10;$columna++){
    echo "<td>".($fila*$columna)."</td>";
  }
}
?>
</center>
</body>
</html>