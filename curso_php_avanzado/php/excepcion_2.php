
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
echo "<em><strong><h3>Con la palabra reservada <font color='red'>throw</font> se cambia el flujo del programa, en este caso hacia la excepción.</h3></strong></em>";
echo "<em><strong><h3>Luego, con la función <font color='red'>catch</font> gobernamos el mensaje en la excepción:</h3></strong></em>";

//Try, throw and catch
//create function with an exception
function checkNum($number){
if($number>1){
throw new Exception("El valor debe ser 1 o menor");
}
return true;
}
//trigger exception in a "try" block
try{
checkNum(3);
//If the exception is thrown, this text will not be shown
echo 'Si ves esto, el valor debe ser menor  que uno o igual';
}
//catch exception
catch(Exception $err){
echo 'Mensaje: '.$err->getMessage();
}
?> 
</body>
</head>
</html>