 <?php
require('php_mysql.php');
require('../AfricasTalkingGateway.php');

$pName = $_POST['person_name'];

$emailAddress = $_POST['email_address'];

$district = $_POST['district_id'];

$user_password = md5($_POST['user_password']);

$confirm_user_password = md5($_POST['confirm_user_password']);

if($user_password != $confirm_user_password) {

	echo "Passwords did not match";

	exit();
	
}

$mysqli_connection->query("INSERT INTO members(member_name,districts_id,PASSWORD,EMAIL_ADDRESS)VALUES('$pName','$district','$user_password','$emailAddress')");

$message = "Hello ".$pName.", Thank you for creating an account with Climate change Uganda. You will login with your email and your password, Our team leader will contact you shortly for more information" ; 

$gateway    = new AfricasTalkingGateway("sandbox", "89c0376e436020f9f67d62a6d68bfc1c395d65f29c3a14b5663c08105207962b","sandbox"); 

header("Location:list_of_users.php");