<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Rutina include para factorial </h1>
<?php
echo "<br><b>Número factorial!</b> = ";
$factorial=1;
for ($i=$numero;$i>=1;$i--){
  $factorial*=$i;
  echo $i;
  echo($i==1)?"=":"x";
}
echo "<b>$factorial</b>";
?>
</center>
</body>
</html>