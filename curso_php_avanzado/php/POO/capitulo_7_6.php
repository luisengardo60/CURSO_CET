<HTML>
	<HEAD>
		<TITLE>Destructores en PHP</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Destructores</strong></em></H2>
<?PHP
//Destruct se ejecuta cuando se termina un método.
//En el ejemplo, hasta que todas las referencias al mismo objeto no 
//finalicen, no se ejecutará el Método Destruct
class Ajedrez{
function __destruct(){
echo "me muero...:((";
}
}
$rey=new Ajedrez();
$principe=$rey;
echo "jaque al rey...<br>";
unset ($rey);
echo "mate al rey...<br>";
unset ($principe);
?>
</CENTER>
</BODY>
</HTML>