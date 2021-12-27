<?php

	$server = "localhost";
        $username = "root";
        $password = "";
        $database = "Mybank";

// Create connection
        $conn = mysqli_connect($server, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>