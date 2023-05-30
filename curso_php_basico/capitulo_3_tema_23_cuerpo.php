<?php
$base=9;
$exponente=7;
$resultado=1;
for ($i=1;$i<=abs($exponente);$i++){
	$resultado*=$base;
}
if($exponente<0){
	$resultado=(1/$resultado);
}
echo "$base<sup>$exponente</sup> = ";
echo "<b>$resultado</b>";
?>