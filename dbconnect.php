<?php
	//$itemNum = $_POST['itemNum'];
	$servername = "localhost";
	$username = "valet";
	$password = "2bU73pL3aZcNaSwf";
	$db = "bmw_lot1";
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>