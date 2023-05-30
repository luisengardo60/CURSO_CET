<HTML>
<HEAD>
<Title>Variables  en coma flotante</Title>
<META http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
</HEAD>
<BODY>
<center>
<h2>Formatos de los números en coma flotante y comillas</h2>
<h3>nombre: capitulo_2_tema_1.php</h3>
<TABLE border="4" cellpadding="3" cellspacing="5">
<tr align="left">
<TD bgcolor="yellow">Estándar</td>
<td>
<?PHP
$num=2.589;//formato estándar
echo $num; 
?>
</tr>
<tr align="left">
<TD bgcolor="yellow">Científico (1.5e2)</td>
<td>
<?php
$num=1.5e2;
echo $num;// mostramos el valor de $num
?>
</tr>
<tr align="leftt">
<TD bgcolor="yellow">Número octal</td>
<td>
<?php
$num=0502;//número 0ctal
echo $num;// mostramos el valor de $num
?>
</TD>
</tr>
<tr align="left">
<TD bgcolor="yellow">Número Hexadecimal</td>
<td>
<?php
$num=0x12;//número hexadecimal 
echo $num;// mostramos el valor de $num
?>
</TD>
</tr>
</TABLE>
<?php
$lenguaje="PHP";
$ver="v5.3.5";
echo "<br><br><br><b>Ejemplos con comillas simples y dobles:</b><br><br>";
echo "<B> Estamos 'trabajando' con $lenguaje ($ver)</B><br>";
echo "<B> Estamos \"trabajando \"con $lenguaje ($ver)</B><br><br>";
echo 'Una sola comilla: la variable $lenguaje contiene:';
echo $lenguaje;
echo "<br/>";
echo "Ahora con dos comillas sin resaltar la variable: La variable $ver contiene:";
echo $ver."<br>";
echo  "Ahora con dos comillas  resaltamos la variable con : La variable  \$ver contiene:";
echo $ver;
echo  'Ahora con dos comillas  resaltamos la variable con : La variable  $ver contiene:';
echo $ver;
echo "<br><br>";
echo  "<b>Los siguientes son ejemplos de constantes definidas en PHP:<br></b>";
echo __LINE__."<br>";
echo PHP_OS."<br>";
echo PHP_VERSION;
?>
</CENTER>
</BODY>
</HTML>