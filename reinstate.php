<?php
	require_once('dbconnect.php');
		
		$tag = filter_input(INPUT_POST, 'tag');

		$sql = "SELECT * FROM archive WHERE tag_number = '$tag'";
		$result = $conn->query($sql);
		if($result->num_rows < 1){
			header('Location: error.php');
		}
	$conn->close();
	
	while ($row = $result->fetch_assoc()) {
?>

<!doctype html>
<html>
	<head>
		<title>BMW Lot1 Database</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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
		
		<div class="container" style="padding: 0 !important; margin-top: 80px;">
			<div class="jumbotron text-center">
				<h1>Reinstate Car</h1>
			</div>
		</div>
		
		<div class="container" style="background-color: #EEEEEE; margin: 20px auto;">
		
        <form class="text-center form-horizontal" action="reinstate_car.php" method="post" style="margin: 20px;">
		
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Car Tag / Loaner Number:</label>
			<div class="col-md-5 col-md-push-2">
				<input class="form-control" type="text" name="static_tag" value="<?php echo $row['tag_number']; ?>" required disabled>
				<input class="form-control" type="hidden" name="tag" value="<?php echo $row['tag_number']; ?>"><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Spot Number:</label>
			<div class="col-md-5 col-md-push-2">
				<input class="form-control" type="text" name="location"><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Washed:</label>
			<div class="col-md-5 col-md-push-2">
				<select class="form-control" name="wash" required>
					<option value="<?php echo ($row['wash']); ?>"><?php echo $row['wash']; ?></option>
					<option value="Yes">Yes</option>
                    <option value="No">No</option>
				</select><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Serviced:</label>
			<div class="col-md-5 col-md-push-2">
				<select class="form-control" name="service" required>
					<option value="<?php echo ($row['serviced']); ?>"><?php echo $row['serviced']; ?></option>
					<option value="Yes">Yes</option>
                    <option value="No">No</option>
				</select></br>
			</div>
			</div>
			
			<div class="form-group">
			<label class="col-md-2 col-md-push-2 control-label">Ready:</label>
			<div class="col-md-5 col-md-push-2">
				<select class="form-control" name="ready" required>
					<option value="<?php echo ($row['ready']); ?>"><?php echo $row['ready']; ?></option>
					<option value="Yes">Yes</option>
                    <option value="No">No</option>
				</select><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Car Model:</label>
			<div class="col-md-5 col-md-push-2">
				<input class="form-control" type="text" name="model" value="<?php echo ($row['make_model']); ?>"><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">Comments:</label>
			<div class="col-md-5 col-md-push-2">
				<textarea cols="40" rows="5" class="form-control" name="comments"><?php echo ($row['comments']); ?></textarea><br>
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label">&nbsp;</label>
			<div class="col-md-4 col-md-push-2">
				<input type="submit" value="Reinstate Car" id="add"><br>
			</div>
			</div>
			
		</form>
			<br><br>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<div class="btn-group" role="group">
					<a href="index.php"><button type="button" class="btn btn-default">Home</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="add.html"><button type="button" class="btn btn-default">Add</button></a>
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

		<?php } ?>