<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
  <head> 
   <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type"> 
    <title>Interacción con formularios</title> 
    <h3>Nombre:capitulo_2_tema_15.1</h3>
    <h23>Nombre:Capitulo_2_tema_15_1.php
</head> 
<body>
<?php 
$si=$_POST['conv'];
$si2=$_POST['cantidad'];
echo $si;
echo '<br>';
echo $si2;
echo "Son "; 
if ($si==1)  {   
echo $si2/166.386; 
echo " euros";   
}
else  { 
	echo $si2/180.386;        echo " dolares";   
	     }
	     ?>
</body> 
</html>