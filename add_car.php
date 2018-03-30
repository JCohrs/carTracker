<?php
// Get the product data
$tag = filter_input(INPUT_POST, 'tag');
$location = filter_input(INPUT_POST, 'location');
$wash = filter_input(INPUT_POST, 'wash');
$service = filter_input(INPUT_POST, 'service');
$ready = filter_input(INPUT_POST, 'ready');
$model = filter_input(INPUT_POST, 'model');
$comments = filter_input(INPUT_POST, 'comments');

// Validate inputs
if ($tag == null || $tag == false || $location == null || $wash == null || $service == null || $ready == null) {
    $error = "ERROR ADDING. CHECK DATA AND TRY AGAIN";
    include('error.php');
} else{
    require_once('dbconnect.php');

	$sql = "SELECT * FROM car_info WHERE tag_number = '$tag'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$error = "TAG ALREADY EXISTS";
		include('error.php');
	} else {

	$sql2 = "SELECT * FROM car_info WHERE location = $location";
	$result2 = $conn->query($sql2);
	if($result2->num_rows > 0){
		$error = "LOCATION OCCUPIED";
		include('error.php');
	} else {

    //Add the product to the database  
    $query = "INSERT INTO car_info
                 (tag_number, location, wash, serviced, ready, make_model, comments)
              VALUES
                 ('$tag', '$location', '$wash', '$service', '$ready', '$model', '$comments')";
	$insert = mysqli_prepare($conn, $query);
	mysqli_stmt_execute($insert);
	mysqli_stmt_close($insert);

    // Go to index
	$success = "SUCCESSFULLY ADDED";
    include('success.php');
}
}
}
?>