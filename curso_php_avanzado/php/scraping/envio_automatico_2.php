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
		$prueba="san joaquin";
		?>
		<form name="miformulario" action="javascript:alert('¡Hola ' +document.forms.miformulario.nombre.value+ '!')" method="post">
		<input type="text" name="nombre" value="<?php echo $prueba ?>">
		<!--<input type="submit"><input type="reset">-->
		</form>
	</body>
</html>