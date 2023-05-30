<HTML>
	<HEAD>
		<TITLE>Atributos y Métodos de Clases</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Atributos y métodos estáticos</strong></em></H2>
			<H2><em><strong>Para este caso, un método estático, se accesa directamente sin crear objeto</strong></em></H2>
<?PHP
//Los atributos y métodos de clase, tabíen llamados estáticoss
//son aquellos que pueden ejecutarse directamente desde la clase
//sin necesidad de crear un objeto
class miscelanea {
static function autores() {
return "Franklin Planchart";
}
}
echo miscelanea::autores();
?>
</CENTER>
</BODY>
</HTML>