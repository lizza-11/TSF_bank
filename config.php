<?php
$host ='Localhost';
$user = 'root';
$pass = '';
$db = 'sparks_bank';

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>