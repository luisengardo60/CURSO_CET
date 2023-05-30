
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
class customException extends Exception{
public function errorMessage(){
//error message
$errorMsg='Error en la línea '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> No es un entero!';
return $errorMsg;
}
}
$entero= 300.45;
try{
//check if
if(filter_var($entero, FILTER_VALIDATE_INT) === FALSE){
//throw exception if email is not valid
	//ejecuta al constructor
throw new customException($entero);
}
}
//crea el objeto
catch (customException $e){
//display custom message
	//ejecuto el método de la clase customException que muestra el error.
echo $e->errorMessage();
}
?> 
</body>
</head>
</html>