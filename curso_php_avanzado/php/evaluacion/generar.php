<html>
<head>
<title>Clase que genera Random</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
	<?php
	class generar_matriz{
	protected $nombre;
	public $fecha_reporte;
	private $min=array();
	private $max=array();	
	protected $valor=array(array());
	protected $estado;	
	private $cadena;
	private $cont_fecha;
		function __construct($min,$max){
			//$this->fecha_reporte=$fecha;
			$this->min=$min;
			$this->max=$max;			
		}
		function crear_matriz(){
			for ($j=0;$j<5;$j++)
			{
				for ($i=0;$i<100;$i++)
				{
					$this->valor[$i][$j]=mt_rand($this->min[$j],$this->max[$j]);
					//$this->valor[$i][$j]=number_format($this->valor[$i][$j],2,".","");
					
					//echo $this->valor[$i][$j].";";
					//echo $i."*".$j."<br>";	
					}
					//echo $i;
					//echo "<hr>";
				}

			}
		function crear_archivo($nombre,$relative)
		{
		for ($i=0;$i<100;$i++)			
			{
				$relative_2="-".$relative." day";
				$cont_fecha= date('y-m-d', strtotime($relative_2)) ; // resta 1 día
				$cadena=$cont_fecha.";";
				for ($j=0;$j<5;$j++)
				{
					if ($j<4){
						$especial=";";
					}elseif($j==4){
						$especial="\n";
					}
					$cadena.=$this->valor[$i][$j].$especial;
				}	
				fwrite($nombre,$cadena);
		}
			
		}
	}
	?>
</center>
</body>
</html>