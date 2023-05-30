<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<?php
//Rutina include que retorna una valor a la rutina principal
//que hace el llamado.
if (!isset($numero))
	$numero=10;

$es_primo=true;

for($i=2;$i<$numero;$i++){
	if ($numero%$i==0){
		$es_primo=false;
		break;
	}
}
return $es_primo;
echo $es_primo;
?>
</center>
</body>
</html>