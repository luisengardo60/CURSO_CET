<html>
<head>
<title>Evaluacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2><b><font color="blue"> Métricas Internet República Bolivariana de Venezuela-CANTV</font></b><h2>
<?php
include("generar.php");
 
		 	
$sitios=array("Yaracuy"=>"Occidente", "Monagas"=>"Oriente","Caracas"=>"Centro","Zulia"=>"Occidente","Apure"=>"Llanos","Bolivar"=>"Sur","Anzoategui"=>"Oriente","Barinas"=>"Llanos","Tachira"=>"Andes","Merida"=>"Andes","Trujillo"=>"Andes","Portuguesa"=>"Llanos","Cojedes"=>"Llanos","Aragua"=>"Centro","Carabobo"=>"Centro","Falcon"=>"Occidente","Lara"=>"Occidente","Nueva_Esparta"=>"Oriente","Sucre"=>"Oriente","Delta_Amacuro"=>"Oriente","Bolivar"=>"Sur","Vargas"=>"Centro","Miranda"=>"Centro");		 
$supervisor=array("Oriente"=>"Luis Coronado","Occidente"=>"Franklin Planchart","Llanos"=>"Francisco Masso","Sur"=>"Cesar Martinez","Centro"=>"Mario Tami","Andes"=>"Carlos Salcedo");
$todo_algo=$_POST['acciones'];
if (isset($_POST['sel'])){
$opcion= $_POST['sel'];
}elseif((!isset($_POST['sel']))&&$todo_algo=="algo"){	
	die("No seleccionó alternativa(S)");
}
if ($todo_algo=="algo")
{
foreach($opcion as $clave=>$valor)
{
	switch($valor)
	{
		case "A1":
		$min=array(2000000.00,200000.02,20.00,0.00,1.00);
		$max=array(10000000.01,1000000.04,170.00,20,100.00);
		// velocidad down, up, rtt, jitter y %pérdidas
		//necesario solventar la compatibilidad numérica con Mysql, para que no trunque 
		//Punto pendiente.
		$generar=new generar_matriz($min,$max);
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			fopen ($nombre_1,"w");
			$nombre=fopen ($nombre_1,"a+");
			$cont_fecha=5;
			$relativ=10;//diez dias hacia atras
			for($cont_fecha=0;$cont_fecha<5;$cont_fecha++){
			$generar->crear_matriz();
			$relative=$relativ+$cont_fecha;
			$generar->crear_archivo($nombre,$relative);
			}
			//fclose($nombre);
					
		}
		echo "Los archivos fueron creados con éxito...";	
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			fclose ($nombre);
		}

		break;
		case "A2":
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "curso_php";

		// Create connection
//***
$conn=mysqli_connect($servername,$username,$password)or die ('ha fallado la conexion:'.mysql_error());
		mysqli_select_db($conn,$dbname)or die ('ha fallado la conexion:'.mysqli_error());
		$sql='truncate region';
		//$sql ='delete from  region';
		mysqli_query($conn,$sql);
		foreach($supervisor as $clave=>$valor)
		{
			$sql = "INSERT INTO region (region,supervisor)
			VALUES ('$clave','$valor')";
			if (mysqli_query($conn,$sql)) {
	
		} else 
		{
		die ("Error al convertir a Mysql: ".$sql."<br>". mysqli_error($conn));
		}

		}

		//***

		$sql='truncate sondas';
		//$sql ='delete from  sondas';
		mysqli_query($conn,$sql);
		foreach($sitios as $clave=>$valor)
			
		{
			$counte=0;
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			while(!feof($nombre)) {
			$string=fgets($nombre);
			if (!feof($nombre)){
			$datos=explode(";",$string);
			//echo $datos[0]."<br>";
			//echo $datos[1]."<br>";
			//echo $datos[2]."<br>";
			//echo $datos[3]."<br>";
			//echo $datos[4]."<br>";
			//echo $datos[5]."<br>";
			//echo $counte."<br>";
			$counte++;
			//echo $clave."<br>";
			}
		if(!feof($nombre)){

			$sql = "INSERT INTO sondas (fecha,down,up,rtt,jitter,perdidas,sitio,region)
			VALUES ('$datos[0]', '$datos[1]', '$datos[2]','$datos[3]','$datos[4]','$datos[5]','$clave','$valor')";
			if (mysqli_query($conn,$sql)) {
	
} else 
{
die ("Error al convertir a Mysql: ".$sql."<br>". mysqli_error($conn));
}
			}

}
			//fclose($nombre);
		}
		echo "Conversión a Mysql exitosa...";
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			fclose($nombre);
		}

		break;
		case "A3":
		include('index_8.php');
		
		break;
	}
}
}elseif($todo_algo=="todos")
{

	//*******************

	$min=array(2000000.00,200000.02,20.00,0.00,1.00);
		$max=array(10000000.01,1000000.04,170.00,20,100.00);
		// velocidad down, up, rtt, jitter y %pérdidas
		//necesario solventar la compatibilidad numérica con Mysql, para que no trunque 
		//Punto pendiente.
		$generar=new generar_matriz($min,$max);
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			fopen ($nombre_1,"w");
			$nombre=fopen ($nombre_1,"a+");
			$cont_fecha=5;
			$relativ=10;//diez dias hacia atras
			for($cont_fecha=0;$cont_fecha<5;$cont_fecha++){
			$generar->crear_matriz();
			$relative=$relativ+$cont_fecha;
			$generar->crear_archivo($nombre,$relative);
			}
			//fclose($nombre);
					
		}
		echo "Los archivos fueron creados con éxito...";	
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			fclose ($nombre);
		}



$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "curso_php";

		// Create connection
//***
$conn=mysqli_connect($servername,$username,$password)or die ('ha fallado la conexion:'.mysql_error());
		mysqli_select_db($conn,$dbname)or die ('ha fallado la conexion:'.mysqli_error());
		$sql='truncate region';
		//$sql ='delete from  region';
		mysqli_query($conn,$sql);
		foreach($supervisor as $clave=>$valor)
		{
			$sql = "INSERT INTO region (region,supervisor)
			VALUES ('$clave','$valor')";
			if (mysqli_query($conn,$sql)) {
	
		} else 
		{
		die ("Error al convertir a Mysql: ".$sql."<br>". mysqli_error($conn));
		}

		}

		//***

		$sql='truncate sondas';
		//$sql ='delete from  sondas';
		mysqli_query($conn,$sql);
		foreach($sitios as $clave=>$valor)
			
		{
			$counte=0;
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			while(!feof($nombre)) {
			$string=fgets($nombre);
			if (!feof($nombre)){
			$datos=explode(";",$string);
			//echo $datos[0]."<br>";
			//echo $datos[1]."<br>";
			//echo $datos[2]."<br>";
			//echo $datos[3]."<br>";
			//echo $datos[4]."<br>";
			//echo $datos[5]."<br>";
			//echo $counte."<br>";
			$counte++;
			//echo $clave."<br>";
			}
		if(!feof($nombre)){

			$sql = "INSERT INTO sondas (fecha,down,up,rtt,jitter,perdidas,sitio,region)
			VALUES ('$datos[0]', '$datos[1]', '$datos[2]','$datos[3]','$datos[4]','$datos[5]','$clave','$valor')";
			if (mysqli_query($conn,$sql)) {
	
} else 
{
die ("Error al convertir a Mysql: ".$sql."<br>". mysqli_error($conn));
}
			}

}
			//fclose($nombre);
		}
		echo "Conversión a Mysql exitosa...";
		foreach($sitios as $clave=>$valor)
		{
			$nombre_1=$clave.".txt";
			$nombre=fopen ($nombre_1,"r");
			fclose($nombre);
		}

include('index_8.php');

	//*****************
echo "A1,A2,A3";
}
?>
</center>
</body>

</html>