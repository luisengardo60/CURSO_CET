<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Hola curso avanzado con AJAX</title>
 
<script type="text/javascript">
function descargaArchivo() {
  // Obtener la instancia del objeto XMLHttpRequest
  if(window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  }
  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = muestraContenido;
  // Realizar peticion HTTP
  peticion_http.open('GET', 'http://localhost/curso_CET/curso_php_avanzado/php/prueba.txt', true);
  peticion_http.send(null);
  function muestraContenido() {
    if(peticion_http.readyState == 4) {
      if(peticion_http.status == 200) {
        alert(peticion_http.responseText);
      }
    }
  }
}
 
window.onload = descargaArchivo;
</script>
 
</head>
<body></body>
</html>