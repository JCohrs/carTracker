<?php
require_once('dbconnect.php');

// Get IDs
$tag = filter_input(INPUT_POST, 'archive_tag');

// Delete the tag from car_info table insert into archive table
	$sql = "SELECT * FROM car_info WHERE tag_number = '$tag'";
	$result = $conn->query($sql);
if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {

    $query2 = "DELETE FROM car_info
              WHERE tag_number = '$tag'";
	
	$delcar = mysqli_prepare($conn, $query2);
	mysqli_stmt_execute($delcar);
    mysqli_stmt_close($delcar);

	$query3 = "INSERT INTO archive
                 (tag_number, wash, serviced, ready, make_model, comments)
              VALUES
                 ('".$row['tag_number']."', '".$row['wash']."', '".$row['serviced']."', '".$row['ready']."', '".$row['make_model']."', '".$row['comments']."')";
	
	$inscar = mysqli_prepare($conn, $query3);
	mysqli_stmt_execute($inscar);
    mysqli_stmt_close($inscar);

	$success = "SUCCESSFULLY ARCHIVED";
    include('success.php');
	}
}else {
	$error = "ERROR ARCHIVING. CHECK DATA AND TRY AGAIN";
	include('error.php');
}