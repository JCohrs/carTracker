<?php
require_once('dbconnect.php');

// Get IDs
$tag = filter_input(INPUT_POST, 'tag');
$location = filter_input(INPUT_POST, 'location');
$wash = filter_input(INPUT_POST, 'wash');
$service = filter_input(INPUT_POST, 'service');
$ready = filter_input(INPUT_POST, 'ready');
$model = filter_input(INPUT_POST, 'model');
$comments = filter_input(INPUT_POST, 'comments');

// Delete the tag from archive table insert into car_info table
if ($tag != false) {
	$sql = "SELECT * FROM archive WHERE tag_number = '$tag'";
	$result = $conn->query($sql);

    $sql2 = "DELETE FROM archive
              WHERE tag_number = '$tag'";
	
	$delcar = mysqli_prepare($conn, $sql2);
	mysqli_stmt_execute($delcar);
    mysqli_stmt_close($delcar);

	$sql3 = "SELECT * FROM car_info WHERE tag_number = '$tag'";
	$result2 = $conn->query($sql3);

	if($result2->num_rows > 0){
		$error = "TAG ALREADY EXISTS";
		include('error.php');
	} else {

	$sql3 = "INSERT INTO car_info
                 (tag_number, location, wash, serviced, ready, make_model, comments)
              VALUES
                 ('$tag', '$location', '$wash', '$service', '$ready', '$model', '$comments')";
	
	$inscar = mysqli_prepare($conn, $sql3);
	mysqli_stmt_execute($inscar);
    mysqli_stmt_close($inscar);

	$success = "SUCCESSFULLY REINSTATED";
    include('success.php');
	}
} else {
	$error = "ERROR REINSTATING. CHECK DATA AND TRY AGAIN";
    include('error.php');
}