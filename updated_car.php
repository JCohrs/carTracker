<?php
// Get the car data
$tag = filter_input(INPUT_POST, 'tag');
$location = filter_input(INPUT_POST, 'location');
$wash = filter_input(INPUT_POST, 'wash');
$service = filter_input(INPUT_POST, 'service');
$ready = filter_input(INPUT_POST, 'ready');
$model = filter_input(INPUT_POST, 'model');
$comments = filter_input(INPUT_POST, 'comments');

require('dbconnect.php');

// Validate inputs
if ($tag == null || $tag == false || $location == null || $wash == null || $service == null || $ready == null) {
    $error = "ERROR UPDATING. CHECK DATA AND TRY AGAIN";
    include('error.php');
}

if (isset($_POST['up-arch'])) {
	
	$query = "UPDATE car_info
              SET location = '$location', wash = '$wash', serviced = '$service', ready = '$ready', make_model = '$model', comments = '$comments'
              WHERE tag_number = '$tag'";
			  
	$update = mysqli_prepare($conn, $query);
	mysqli_stmt_execute($update);
    mysqli_stmt_close($update);

	$sql = "SELECT * FROM car_info WHERE tag_number = '$tag'";
	$result = $conn->query($sql);
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

	$success = "SUCCESSFULLY UPDATED AND ARCHIVED";
    include('success.php');
	}
} else {
	// Update Tag  
    $query = "UPDATE car_info
              SET location = '$location', wash = '$wash', serviced = '$service', ready = '$ready', make_model = '$model', comments = '$comments'
              WHERE tag_number = '$tag'";
			  
	$delcar = mysqli_prepare($conn, $query);
	mysqli_stmt_execute($delcar);
    mysqli_stmt_close($delcar);

    // Go to index
    $success = "SUCCESSFULLY UPDATED";
    include('success.php');
}
?>