
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<body>
<?php
class customException extends Exception{
public function errorMessage(){
//error message
$errorMsg='Error en la línea '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> No es una dirección válida';
return $errorMsg;
}
}
$email = "someone@example...com";
try{
//check if
if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
//throw exception if email is not valid
throw new customException($email);
}
}
catch (customException $e){
//display custom message
echo $e->errorMessage();
}
?> 
</body>
</head>
</html>