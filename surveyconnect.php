<?php

	include('survey.html');

	$name = $_POST['name'];
	$color = $_POST['color'];
	$smell = $_POST['smell'];
	$type = $_POST['type'];
	$country = $_POST['country'];
	$lifestory = $_POST['lifestory'];



	//db connection

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "survey";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


	
	$sql = "INSERT INTO surveydata(name, color, smell, type, country, lifestory) VALUES ('$name', '$color', '$smell', '$type', '$country', '$lifestory')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} 

	else {
	echo "Something went wrong";
	}

	$conn->close();

	header('index.html');




?>