<!Doctype html>
<html>
<body>
	<h2> convierte un objeto java script en cadena y lo envía al servidor</h2>
	<script>
	var myObj = { "name":"John", "age":31, "city":"New York" };
var myJSON = JSON.stringify(myObj);
window.location = "json_post.php?x=" + myJSON;
	</script>
</body>
</html>