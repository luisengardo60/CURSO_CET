<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Funciones strchr, strrchr</h1>
<?php
// Desde a primera vez que aparece la subcadena en adelante
echo "strchr('Hello world! work','wo')"."<br>";
echo strchr("Hello world! work","wo")."<br>";
// Desde la última vez que aparece la subcadena en adelante
echo "strrchr('Hello world! work','wo')"."<br>";
echo strrchr("Hello world! work","wo")."<br>";
//Desde la primera vez que aparece la cadena, pero una de la estructura no  está en la cadena. Entonce no no hay coincidencia
echo "strchr('Hello world! work','wk')"."<br>";
echo strchr("Hello world! work","wk")."<br>";
//Desde la última vez que aparece la estructura simiilar, no importa que haya elementos que no se parecen
echo "strrchr('Hello world! work','wk')"."<br>";
echo strrchr('Hello world! work',"wk")."<br>";
?>
</center>
</body>
</html>