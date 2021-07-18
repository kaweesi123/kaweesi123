 <!DOCTYPE html>
<html>

<?php require('php_mysql.php') ?>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'php_mysql.php'; ?>

    <main class="py-4">
        <div class="container">

        	<h2>Create an account</h2>
        	<hr>

        	<form method="POST" action="save_form.php">
        		<div class="row">
        			<div class="col-md-6">
        				<br><label>Name</label>
        				<input type="text" name="person_name" class="form-control" required>

        				<br><label>Email</label>
        				<input type="email" name="email_address" class="form-control" required>


        				<!-- read districts -->

        				<?php 

        				$results = $mysqli_connection->query("SELECT district_id, district_name FROM districts ORDER BY district_id ASC");
        				 ?>

        				<br><label>District of origin</label>
        				<select class="form-control" name="district_id">

        					<?php 

        					foreach ($results as $key => $value) {

	                           $id = $value["district_id"];
	                           $name = $value["district_name"];

	                           echo "<option value='$id'>$name</option>";

	                        }


        					 ?>
        					 
        				</select>

        				<br>

        				<br><label>Password</label>
        				<input type="password" name="user_password" class="form-control" required>

        				<br><label>Confirm Password</label>
        				<input type="password" name="confirm_user_password" class="form-control" required>

        				<hr>


        				<button type="submit" class="btn btn-success">Register</button>

        			</div>
        		</div>
        	</form>

        </div>
    </main>

</body>
</html>