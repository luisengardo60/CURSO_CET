<HTML>
    <HEAD>
        <TITLE>Implements interface</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    <BODY>
        <CENTER>
            <H2><em><strong>Poliformismo</em></strong></H2>
<H2><em><strong>Capacidad de manejar los objetos en llamadas vectoriales</em></strong></H2>
<?PHP
 class classPoligono
{
function calculo()
{
echo 'El area depende del tipo de poligono';
}
}
class classCuadrado extends classPoligono
{
function calculo()
{
echo 'area de un cuadrado : a=l*l<br>';
}
}
class classRectangulo extends classPoligono
{
function calculo()
{
echo 'area de un rectangulo : a=b*h<br>';
}
}
class classTriangulo extends classPoligono
{
function calculo()
{
echo 'area de un triangulo : a=(b*h)/2<br>';
}
}
function area($obj)
{
$obj->calculo();
}
$cuadrado = new classCuadrado;
$rectangulo = new classRectangulo;
$triangulo = new classTriangulo;
$lista_f=array($cuadrado,$rectangulo,$triangulo);
foreach($lista_f as $clave)
area($clave);
?>
</CENTER>
</BODY>
</HTML>