<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>break</></h1><br>
<?php
$numero=6;
echo "<br><b>Número!</b>  =  ";
$factorial=1;
while(1){
  echo  $numero."x";
  $factorial*=$numero;
  $numero--;
  if ($numero==1){
    break;
  }
}
echo "1 =  <b>$factorial</b>";
?>
</center>
</body>
</html>