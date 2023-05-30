<HTML>
 <HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  
   <TITLE>Funciones de Fecha y Hora</TITLE>
   <style>
    body {font: 12px Verdana;}
    table {font: 12px Verdana;color:orange;text-align:right;}
    tr.cabecera {background-color:#808080;color:#F8F8F8;font-weight:bold;}
    tr.semana {background-color:#FFFBAD;color:#808080;font-weight:bold;}
    a {text-decoration:none;color:orange;}
    a.marcado {background-color:green;}
    a.festivo {color:#B00000;}
    a.opc {color:gray;font-weight:bold;}
    p.error {font:14px;color:red;font-weight:bold;}
  </style>
 </HEAD>

 <?php
   $meses_txt=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   $dias_txt=array("L","M","X","J","V","S","D");

   // Función que transforma el dia de la semana para que el 0 sea el lunes y
   // el 6 el domingo
   function actualiza_dia_semana($dia){
     return ($dia>0)?$dia-1:6;
   }
   // Función que informa si un día pertenece al fin de semana
   function festivo($dia){
     return ($dia>4)?true:false;
   }

 ?>
 <BODY>
   <CENTER>
     <H3>Funciones de Fecha y Hora</H3>
     <?php
       $hoy=getdate();
       //$dia=!empty($_GET[dia])?$_GET[dia]:$hoy[day];
       //$mes=!empty($_GET[mes])?$_GET[mes]:$hoy[mon];
       //$anio=!empty($_GET[anio])?$_GET[anio]:$hoy[year];
       $dia=$_POST[dia];
       $mes=$_POST[mes];
       $anio=$_POST[anio];
       if($anio<=99) $anio+=2000;
       if(!checkdate($mes,$dia,$anio)||$anio<1971){
          echo "<HR><P CLASS='error'>ERROR: La fecha introducida no es válida...</P>";
	  echo "<BR>< <A HREF='fechas1.html'>volver</A> ><HR>";
       } else {
	  // obtenemos el día de la semana del primer día del mes
	  $primer_dia=actualiza_dia_semana(date("w",mktime(0,0,0,$mes,1,$anio)));
          // obtenemos el último día del mes
	  $ultimo_dia=date("t",mktime(0,0,0,$mes,1,$anio));

      // escritura de la tabla que representa el calendario de un MES
      echo "<TABLE BORDER='0' CELLPADDING='2' CELLSPACING='0' WIDTH='50%'>\n";
      // escribir la cabecera que incluye el mes y el año del calendario
      echo "<TR CLASS='cabecera'>";
      echo "<TD COLSPAN='7'>",$meses_txt[$mes]," $anio</TD></TR>\n";
      // escribir la cabecera que indica los días de la semana
      echo "<TR CLASS='semana'>";
      for ($i=0; $i<7; $i++)
         echo "<TD>$dias_txt[$i]</TD>";
      echo "</TR>\n<TR>";
      // escribir los días del mes
      $contador_de_dias=1;
      while ($contador_de_dias <= $ultimo_dia)
         {
         for ($i=0; $i<7; $i++)
            if (($i < $primer_dia) || ($contador_de_dias > $ultimo_dia))
	        echo "<TD>&nbsp;</TD>";
            else {
               echo "<TD><A HREF='fechas1.php?dia=$contador_de_dias&mes=$mes&anio=$anio'";
	       if($contador_de_dias==$dia)
	          echo " class='marcado'";
               if(festivo($i))
	          echo " class='festivo'";
	       echo ">$contador_de_dias</A></TD>";
               $contador_de_dias++;
            } 
	 // la siguiente semana comienza por lunes (dia 0)   
         $primer_dia=0; 
         echo "</TR><TR>";
	}
        echo "</TR></TABLE><BR>";
	$fecha=getdate(mktime(0,0,0,$mes,$dia,$anio));
	echo "<P STYLE='color:red;'>Día juliano nº <B>",$fecha[yday]+1,"</B></P><BR>";
	$url = "fechas1.php?dia=$dia&mes=$mes&anio=".($anio-1);
        echo "<PRE>< <A CLASS='opc' HREF='$url'>año-</A> | ";
	$url = "fechas1.php?dia=$dia";
	if ($mes==1)
	    $url .= "&anio=".($anio-1)."&mes=12";
	else 
	    $url .= "&anio=$anio&mes=".($mes-1);
        echo "<A CLASS='opc' HREF='$url'>mes-</A> | ";
	echo "<A CLASS='opc' HREF='fechas1.php?'>hoy</A> | ";
	$url = "fechas1.php?dia=$dia";
	if ($mes==12)
	    $url .= "&anio=".($anio+1)."&mes=1";
	else 
	    $url .= "&anio=$anio&mes=".($mes+1);
        echo "<A CLASS='opc' HREF='$url'>mes+</A> | ";
	$url = "fechas1.php?dia=$dia&mes=$mes&anio=".($anio+1);
        echo "<A CLASS='opc' HREF='$url'>año+</A> >";
        echo "<BR>< <A CLASS='opc' HREF='fechas1.html'>nueva fecha</A> ></PRE>";
       }
     ?>
   </CENTER>
 </BODY>
</HTML>
