<!Doctype html>
<html lang="es">
	<head>
		<meta charset=utf-8>
	</head>
	<body >	
		<?php
		session_start();
		if(!isset($_SESSION['cadena']))
		{
			$_SESSION['cadena']="";
		}		
		$nombre=$_POST['nombre'];
		// si el cokie existe, se toma su valor y se procede a actualizar su valor		
		if(isset($_COOKIE['num_accesos'])){
		$valor=$_COOKIE['num_accesos'];
		$valor++;
		setcookie('num_accesos',$valor);
		}elseif(!isset($_COOKIE['num_accesos'])){
		$valor=1;
		setcookie('num_accesos',$valor);
		//Borra todas las variables de sesion
		$_SESSION=array();
		//Borra la cookie que almacena la sesión
		if(isset($_COOKIE[session_name()]))
		{
			setcookie(session_name(),'');
			//Finalmente destruye la sesión
			session_destroy();
		}
		}
		//Luego de cinco repeticiones (0 a 4), es necesario clausurar la cokie.
		if ($valor==15){
			//clausura  cookie e imprime variable session
		setcookie('num_accesos');
		echo "<font color='red'><em><strong>Prueba de SESSION:</strong></em></font><br>";
		echo $_SESSION['cadena'];
		}
		echo $nombre."<br>";
		$xml = file_get_contents('http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topfreeapplications/limit=10/xml');
		$sxe = new SimpleXMLElement($xml);
		//var_dump($sxe);
		echo $sxe->title."<br>";
		echo $sxe->uri."<br>";
		
		//foreach ($sxe[0] as $elemento){

		//echo $elemento."<br>";
		
		$_SESSION['cadena']=$_SESSION['cadena'].";".$sxe->title;
		
		//}
		//echo $sxe->author->name;
		//echo $sxe[0]->entry[0]->summary."<br>";
		if ($valor<15)
		{	
		header('location:envio_automatico_3.php');
		//exit;
		}

		?>	
	</body>
</html>