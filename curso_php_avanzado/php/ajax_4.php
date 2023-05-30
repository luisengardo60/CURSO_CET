<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ejercicio 11 - Estados de la petición AJAX</title>
    <style type="text/css">
      body { font: 13px Arial, Helvetica, sans-serif; }
      h2 { margin-bottom: 0; font-size: 1.2em; }
      #recurso, #enviar { padding: .3em; font-size: 1.2em; }
      #principal { float: left; width: 70%; }
      #secundario { float: right; width: 25%; }
      #contenidos, #estados, #cabeceras, #codigo {
        border: 2px solid #CCC;
        background: #FAFAFA;
        padding: 1em;
        white-space: pre;
      }
      #contenidos {
        min-height: 400px;
        max-height: 600px;
        overflow: scroll;
      }
      #estados { min-height: 200px; }
      #cabeceras { min-height: 200px; }
      #codigo { min-height: 100px; font-size: 1.5em; }
    </style>
    <script type="text/javascript">
    </script>
  </head>
  <body>
    <form action="#">
      URL: <input type="text" id="recurso" size="70" />
      <input type="button" id="enviar" value="Mostrar contenidos" />
    </form>

    <div id="principal">
      <h2>Contenidos del archivo:</h2>
      <div id="contenidos"></div>
      
      <h2>Cabeceras HTTP de la respuesta del servidor:</h2>
      <div id="cabeceras"></div>
    </div>
    
    <div id="secundario">
      <h2>Estados de la petición:</h2>
      <div id="estados"></div>
      
      <h2>Código de estado:</h2>
      <div id="codigo"></div>
    </div>
  </body>
</html>
