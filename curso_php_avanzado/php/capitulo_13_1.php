<?php
echo "<em><strong><h3>Con la palabra reservada <font color='red'>throw</font> se cambia el flujo del programa, en este caso hacia la excepción.</h3></strong></em>";
echo "<em><strong><h3>Luego, con la función <font color='red'>catch</font> gobernamos el mensaje en la excepción:</h3></strong></em><br>";
try{
	$nombre_fich='C://wamp64/www/CURSO_CET/curso_php_avanzado/files/archivo_text_.txt';
	if (! file_exists($nombre_fich))
		throw new Exception("No existe $nombre_fich",88);
echo "exito en la  operación. Archivo existe!!!";	
} catch(Exception $e){
echo "ERROR ".$e->getCode()."<br>en la línea ".$e->getLine().
"<br>Mensaje del error: '"    .$e->getMessage()." '<br><br>";

}
echo "<em><strong>Ahora otro intento con el nombre correcto del archivo:</strong></em><br>";
try{
	$nombre_fich='C://wamp64/www/CURSO_CET/curso_php_avanzado/files/archivo_text_1.txt';
	if (! file_exists($nombre_fich))
		throw new Exception("No existe $nombre_fich",99);
echo "exito en la  operación. Archivo $nombre_fich existe!!!";	
} catch(Exception $e){
echo "ERROR ".$e->getCode()."<br>en la línea ".$e->getLine().
"<br>Mensaje del error: '"    .$e->getMessage()." '<br><br>";
}
?>