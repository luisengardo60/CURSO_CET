
				<?PHP
				class fichero{
					private $nombre_fich;
					private $octetos;
					private $fecha_modificacion;

					function construct($f){
						if (is_file($f)){
							$this->nombre_fich=$f;
							$this->octetos=(filesize($this->nombre_fich));
							$this->fecha_modificacion=filemtime($this->nombre_fich);
						}else{
							die("*** ERROR: no se encuentra el archivo'$f'");
						}
					}
 					function octetos(){
 						return $this->octetos;
 					}
 					function fecha_modificacion(){
 						return $this->fecha_modificacion;
 					}
 					function renombre($nombre_nuevo){
 						if (rename($this->nombre_fich,$nombre_nuevo)){
 							$this->nombre_fich=$nombre_nuevo;
 							return 1;
 						}else {
 							echo "***ERROR: No se pudo renombrar el archivo...";
 						}
 					}
				}
				?>
		