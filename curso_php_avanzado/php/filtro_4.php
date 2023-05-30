<?php
echo "<em><strong><h3>En este caso, se validó una IPv4 con Filter_validate_IP:</h3></strong></em><br>";
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
echo("$ip is a valid IP address");
} else {
echo("$ip is not a valid IP address");
}
?> 