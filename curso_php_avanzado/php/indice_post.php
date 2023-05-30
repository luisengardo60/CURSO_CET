<html>
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h2><b><font color="blue"> Teorías y/o evaluaciones seleccionadas:</font></b><h2>
<?php
$sitio=$_POST['sitios'];
if (isset($_POST['sel'])){
$opcion= $_POST['sel'];
}
$nomenclatura=array("Teoria_de_archivos"=>"A1","Filtros"=>"A2","Comandos_Mysql"=>"A3","Teoria_POO"=>"A4","Teoria_de_XML"=>"A5","Teoría_de_SAX"=>"A6","Teoría_de_DOM"=>"A7","Teoría_de_AJAX"=>"A8","Teoría_de_JSON"=>"A9","Patrones_de_Diseño_en_PHP"=>"A10","Practica_1"=>"A11");
$contador=0;
$numeros=array(5,8,13,21,4,0,0,6,5,7,4,0);
$marca=array(0,0,0,0,0,0,0,0,0,0,0,0);
$marca2=false;
if (($sitio=="nada") and isset($_POST['sel'])){
foreach($opcion as $clave=>$valor){
	foreach($nomenclatura as $clave2=>$valor2){
		if ($opcion[$clave]==$nomenclatura[$clave2]){
			$marca[$contador]=1;
			$marca2=true;
		}
		$contador++;
	}
	$contador=0; 
}
}
$k=0;

		if (file_exists('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general_v3.xml')){
                     $teoria=simplexml_load_file('C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general_v3.xml');
  			foreach($nomenclatura as $clave => $valor){
 				
				
				$cont=$numeros[$k];               
	  				if ($sitio=="todos"){
	  					echo "<h2>$clave<h2>";
	  					 
				echo "<table border=2px>";
						for($cont_1=0;$cont_1<$cont;$cont_1++){							
						echo "<tr><td><pre>";	

                    	 print_r($teoria->$clave->tema[$cont_1]);
                     	echo "</pre></td></tr>"; 
                     	 $marca2=true;						
						}
						echo "</table>";

             }
             
             if(($sitio=="nada")&($marca2==true)){
             	foreach($opcion as $valor2){
             		if ($valor2==$valor){
             			echo "<h2>$clave<h2>";	
				echo "<table border=2px>";
				for($cont_1=0;$cont_1<$cont;$cont_1++){
						echo "<tr><td><pre>";
						echo $clave;
                    	 print_r($teoria->$clave->tema[$cont_1]);
                     	echo "</pre></td></tr>"; 
                     	 $marca2=true;						
						}
             		}
             	}
             }
             $k++;     			          
}
}             
         else{
               die('No se encuentra el archivo C://wamp64/www/CURSO_CET/curso_php_avanzado/xml/teoria_general.xml');
                 }


if (!$marca2){
	
	echo "No seleccionó temas o prácticas de evaluación...";
	
}
?>
</center>
</body>

</html>