<!DOCTYPE html>
<html>
<body>

<?php
$str = "<h1>Saludos estudiantes curso avanzado PHP!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

</body>
</html>