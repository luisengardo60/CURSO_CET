<HTML>
<HEAD>
<TITLE>Variables superglobales</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<?php
$x=75;
$y=25;
function addition() {
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
//In the example above, since z is a variable present within the $GLOBALS array, 
//it is also accessible from outside the function!
?>
</CENTER>
</BODY>
</HTML>