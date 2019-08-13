<?php
	$dbhost = "phpmysqldb.mysql.database.azure.com"; //"localhost";
	$dbname = "webappdb";
	$dbuser = "kitchiemoll@phpmysqldb";//"root";
	$dbpass = "Adm1n_SQL";//"root";


	//get fields from post
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$emailAddress = $_POST['emailAddress'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	//validate


	//create connection
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = " INSERT INTO `users` (`firstname`, `lastname`, `email_address`, `password`) VALUES ('$firstname', '$lastname', '$emailAddress', '$password'); ";

	$result = mysqli_query($connection, $query);
	if ($result && mysqli_affected_rows($connection) == 1){
		echo "Registration successful.";
	}else{
		echo "Registration failed.";
	}
	//close connection
	mysqli_close($connection);
?>



