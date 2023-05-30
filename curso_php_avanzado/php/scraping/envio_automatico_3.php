<!Doctype html>
<html lang="es">
	<head>
		<meta charset=utf-8>

	</head>
	<body onload="enviar()">	
		<script language="JavaScript">
function enviar(){
	document.forms.miformulario.submit();
}
		
		</script>

		<?php
		$indice=0;
		$prueba=array("San joaquin","Charallave","Maracaibo","Maracay","Coro","Ciudad Bolivar","Punto Fijo","Mérida","San Cristobal","Trujillo", "Barinas", "San Fernando de Apure", "San Carlos", "Valencia","Turmero");
		if(isset($_COOKIE['num_accesos']))// Si el cokie no existe, indica que es la primera vez que 
		//que se responderá al formulario automático.
		{
			echo "<font color='red'><em><strong>prueba de cookie:</strong></em></font><br>";
		$indice=$_COOKIE['num_accesos'];//si existe, el índice del vector actualizará el
		// offset para colocar los datos de solicitud en el formulario
		echo "<em><strong>Valor del índice:</em></strong>".$indice;
		}
		?>
		<form name="miformulario" action="scraping_4.php" method="post">
		<input type="text" name="nombre" value="<?php echo $prueba[$indice]; ?>">
		<!--<input type="submit"><input type="reset">-->
		</form>
	</body>
</html>