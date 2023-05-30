<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>do-While</></h1><br>
<?php
$numero=6;
echo "<br><b>Número!</b>  =  ";
$factorial=1;
do{
  echo  $numero."x";
  $factorial*=$numero;
  $numero--;
}while($numero>1);
echo "1  =  <b>$factorial</b>";
?>
</center>
</body>
</html>