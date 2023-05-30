<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h1>Sentencia  <I>Continue</></h1><br>
<?php 
$stack = array("first", "second", "third", "fourth", "fifth"); 
foreach($stack as $v){ 
echo $v."<br>"; 
} 

$stack2 = array('one'=>'first', 'two'=>'second', 'three'=>'third', 'four'=>'fourth', 'five'=>'fifth'); 
foreach($stack2 AS $k=>$v){ 
if($v == 'second')continue; 
if($k == 'three')continue; 
if($v == 'fifth')break; 
echo $k.' ::: '.$v.'<br>'; 
} 
?> 
</center>
</body>
</html>
