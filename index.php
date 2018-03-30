<?php
	require_once('dbconnect.php');
	
		$sql = "SELECT * FROM car_info WHERE comments <> 'Middle' ORDER BY location";
		$result = $conn->query($sql);
		$taken = $result->num_rows;//mysqli_num_rows($result2);
		$spotsremain = 60 - ($taken - 1);

		$sql3 = "SELECT * FROM car_info WHERE wash = 'No' AND serviced = 'Yes'";
		$result3 = $conn->query($sql3);
		$count = $result3->num_rows;

	$conn->close()
?>

<!doctype html>
<html>
	<head>
		<title>BMW Lot1 Database</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		-->
		<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap-theme.css">
		<script src="bootstrap-3.3.6-dist\css\bootstrap.js"></script>
		<link rel="stylesheet" href="bmw.css">
	</head>
	
	<body>
		
		<div class="container" style="background-color: #EEEEEE; margin: 20px auto;">
		
			<?php echo "<h2 style='text-align: center'>Spots Remaining: ".$spotsremain."</h2>"; ?>
			<?php echo "<h2 style='text-align: center'>Washes Remaining: ".$count."</h2>"; ?>
			<br>
			<form class="navbar-form text-center" action="search.php" method="get" role="search">
				<div class="form-group">
					<input type="text" class="form-control" name="tag" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			
			<br><br><br><br>
			
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<div class="btn-group" role="group">
					<a href="add.html"><button type="button" class="btn btn-default">Add</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="update.html"><button type="button" class="btn btn-default">Update</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="list.php"><button type="button" class="btn btn-default">Lot List</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="ready.php"><button type="button" class="btn btn-default">Ready List</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="wash_list.php"><button type="button" class="btn btn-default">Wash List</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="archive.html"><button type="button" class="btn btn-default">Archive</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="archive_list.php"><button type="button" class="btn btn-default">Archive List</button></a>
				</div>
			</div>
			
		</div>
	</body>
	
</html>