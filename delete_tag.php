<?php
require_once('dbconnect.php');

// Get IDs
$tag = filter_input(INPUT_POST, 'tag');

// Delete the tag from the database
if ($tag != false) {
    $query = "DELETE FROM car_info
              WHERE tag_number = '$tag'";
	
	$delcar = mysqli_prepare($conn, $query);
	mysqli_stmt_execute($delcar);
    mysqli_stmt_close($delcar);
	
	$success = "SUCCESSFULLY DELETED";
	include('success.php');
} else {
	$error = "ERROR DELETING. CHECK DATA AND TRY AGAIN";
    include('error.php');

// Display the Lot List page
}