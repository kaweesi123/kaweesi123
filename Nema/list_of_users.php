 <!DOCTYPE html>
<html>

 <?php require('php_mysql.php') ?>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'form.php'; 

	  $users = $mysqli_connection->query("SELECT members.member_id,members.member_name,members.EMAIL_ADDRESS,districts.district_name AS district_name FROM members,districts WHERE members.districts_id = districts.district_id");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>List of Users</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>EMAIL</th>
        			<th>DISTRICT OF ORIGIN</th>
        		</thead>

        		<tbody>     			
        			
        		</tbody>
        	</table>


        </div>

    </main>
</body>
</html>