<html>
<head>
<Title>trabajando con Cadenas</title>
</head>
<body>
<center>
<h1>Función strcmp</h1>
<?php

//0 - if the two strings are equal
//<0 - if string1 is less than string2
//>0 - if string1 is greater than string2

echo strcmp("Hello world!","Hello world!")."<br>";
echo strcmp("Hello world!","Hello word!")."<br>";
echo strcmp("Hello orld!","Hello world!")."<br>";
//strcasecmp es parecido, pero no diferencia mayúsculas de minúsculas

?>
</center>
</body>
</html>