<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if(isset($_REQUEST['check1']))
{
$suma=$_REQUEST['valor1']+$_REQUEST['valor2'];
echo "la suma es: ".$suma."<br>";
}

if(isset($_REQUEST['check2']))
{
$resta=$_REQUEST['valor1']-$_REQUEST['valor2'];
echo "la suma es: ".$resta."<br>";
}
?>
</body>
</html>

