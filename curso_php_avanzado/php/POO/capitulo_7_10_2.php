<HTML>
    <HEAD>
        <TITLE>Implements interface</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    <BODY>
        <CENTER>
            <H2><em><strong>Interfaces de interfaces</em></strong></H2>
<?PHP
interface Foo{
	public function doFoo();
}
interface Bar extends Foo{
	public function doBar();
}
class Zip implements Bar {
	public function doFoo(){
		echo "Foo";
	}
	public function doBar(){
		echo "Bar";
	}
}
$zip=new Zip;
$zip->doFoo();
echo "<br>";
$zip->doBar();

?>
</CENTER>
</BODY>
</HTML>