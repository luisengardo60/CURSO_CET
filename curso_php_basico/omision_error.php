<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>   
</head>
 <TITLE>Operadores</TITLE>
 <BODY>
   <CENTER>
    <H2>Operador de omisi�n de errores </H2>
    <?php
       $a = 10;
       $b = 0;
       // la divisi�n por 0 genera un error
       // pero con este operador la ejecuci�n
       // contin�a sin problemas
       // @ el arrova, error controlado, no despliega el errror
       @$resultado=$a/$b;
       $texto1="El resultado de $a/$b es: $resultado<BR>";
       $texto2="Se ha producido un error:<B> $php_errormsg </B>";
       // comprobamos si se ha producido un error
       // si es as� mostramos el mensaje de error
       echo "<BR>";
       echo (empty($resultado))? $texto2: $texto1; 
     ?>
   </CENTER>
 </BODY>
</html>
