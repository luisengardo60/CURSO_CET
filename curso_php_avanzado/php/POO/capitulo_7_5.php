<HTML>
	<HEAD>
		<TITLE><em><strong>Constructores</strong></em></TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Constructores</strong></em></H2>
				<?php
class Cadenas{
	private $str;
	function __Construct($param){
		if (gettype($param) !='string'){
			die("ERROR: parámetro no válido ");
			echo "<br>";
	}
		else{
			
			$this->str=$param;
		echo $this->str;
		echo "<br>";
	}
}
}
$obj=new Cadenas('Hola curso avanzado PHP');
$obj=new Cadenas(7);   //dará error
?>
		</CENTER>
	</BODY>
</HTML>
