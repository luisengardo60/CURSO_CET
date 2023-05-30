<!DOCTYPE html>
<html>
<body>
<?php
$int = 100.8;
echo "<em><strong><h3>En este caso, el número a validar no es entero. Filter_validate_int es false:</h3></strong></em><br>";
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
echo("Integer is valid");
} else {
echo("Integer is not valid");
}
?>
</body>
</html>