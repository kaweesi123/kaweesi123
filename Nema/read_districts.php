  <?php
require('php_mysql.php');

$results = $mysqli_connection->query("SELECT district_id, district_name FROM districts ORDER BY district_id ASC");

foreach ($results as $key => $value) {

	$id = $value["district_id"];
	$name = $value["district_name"];

	echo "
	<tr> 
	   <td> $id </td>
	   <td> $name </td>
	</tr>
	";
	 
}
