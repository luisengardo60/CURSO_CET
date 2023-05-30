
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>En este caso, se aplica un filter_sanitaze_url:</h3></strong></em><br>";
$url = "https://*www.w3schools.com";
// Remueve los caracteres ilegales de una URL
$url = filter_var($url, FILTER_SANITIZE_URL);

echo "<br>";
// Valida URL
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
echo("$url es una URL válida");
} else {
echo("$url no es una URL válida");
}
?> 
</body>
</head>
</html>