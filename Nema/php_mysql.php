 <?php

 $mysqli_connection = new mysqli("localhost","root","");

 $mysqli_connection->query("CREATE DATABASE IF NOT EXISTS nema_register");

 mysqli_select_db($mysqli_connection,"nema_register");


 $mysqli_connection->query("CREATE TABLE districts(district_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(district_id),district_name varchar(20) NOT NULL UNIQUE)");

 $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('WAKISO')");
 $mysqli_connection->query("DELETE FROM districts WHERE district_id=1");

 $insert = $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('BUSIA')");
 if($insert) echo "inserted successfully";
 else $mysqli_connection->error;

 $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('KAMPALA')");    
 $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('LUGAZI')");
 $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('JINJA')");
 $mysqli_connection->query("INSERT INTO districts(district_name)VALUES('KAWEMPE')");

 $delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name = 'WAKISO'");
 if($delete) echo "inserted successfully";
 else  $mysqli_connection->error;


 $mysqli_connection->query("CREATE TABLE tree_types(treetype_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(treetype_id),treetype_name varchar(20) NOT NULL UNIQUE)");


 $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(50'muvule')");

 $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(51'mutssssuba')");
 $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(52'musabu')");
 $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(53'musizi')");
 $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(54'eucaplitus')");

 $insert = $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name)VALUES(52'musabu')");
 if($insert) echo "inserted successfully";
 else $mysqli_connection->error;

 $mysqli_connection->query("UPDATE tree_types SET treetype_name='mutuba' WHERE treetype_id=51");

 $mysqli_connection->query("CREATE TABLE members(member_id int(11) NOT NULL,PRIMARY KEY(member_id),member_name varchar(20) NOT NULL UNIQUE,PASSWORD varchar(100) NOT NULL,EMAIL_ADDRESS varchar(30) NOT NULL UNIQUE,districts_id int(11) NOT NULL, FOREIGN KEY(districts_id) REFERENCES districts(district_id))");

 $insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,PASSWORD,EMAIL_ADDRESS,district_id)VALUES(10,'Florence','1234','naksflo@gmail.com','7')");

 $insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,PASSWORD,EMAIL_ADDRESS,district_id)VALUES(12,'Juliet','5678','julijespa@gmail.com','9')");


 $mysqli_connection->query("CREATE TABLE trees(tree_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(tree_id),member_id int(11) NOT NULL, FOREIGN KEY(member_id) REFERENCES members(member_id),district_id int(11) NOT NULL, FOREIGN KEY(district_id) REFERENCES districts(district_id),number_of_trees int(50) NOT NULL,treetype_id int(11) NOT NULL,FOREIGN KEY (treetype_id) REFERENCES tree_types(treetype_id))");

 $delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name = 'WAKISO'");
 if ($delete) echo "inserted successfully";
 else  $mysqli_connection->error;


 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id)VALUES(10,1,200,54)");

 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id)VALUES(13,3,500,50)");
 
 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id)VALUES(11,4,600,53)");

 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id)VALUES(12,2,1000,51)");

 $insert = $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id)VALUES(14,5,700,52)");