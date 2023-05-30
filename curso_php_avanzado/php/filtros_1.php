<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table border="1px" padding="1px" border-collapse="collapse">
  <tr bgcolor="yellow">
    <td>Nombre del filtro</td>
    <td>ID del filtro</td>
  </tr>
  <?php
foreach (filter_list() as $id =>$filter) {
	echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}
?>
</table>
</body>
</html>