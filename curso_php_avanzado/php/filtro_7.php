
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>El filtro igualmente permite validar si una dirección es IPv6:</h3></strong></em>";
echo "<em><strong><h3>En el ejemplo se utilizó una IPv6 no válida.</h3></strong></em>";
$ip = "2001:0db8:85a3:08d3:1319:8age:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
echo("$ip es una dirección IPv6 válida");
} else {
echo("$ip no es una dirección IPv6 válida");
}
?> 
</body>
</head>
</html>