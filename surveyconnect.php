<?php

	$name = $_POST['name'];
	$color = $_POST['color'];
	$smell = $_POST['smell'];
	$type = $_POST['type'];
	$country = $_POST['country'];
	$lifestory = $_POST['lifestory'];



	//db connection

	$conn = new mysqli('localhost','root','','survey');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into surveydata(name, color, smell, type, country, lifestory) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $name, $color, $smell, $type, $country, $lifestory);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful";
		$stmt->close();
		$conn->close();
	}



?>