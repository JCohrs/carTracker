<?php
	require_once('dbconnect.php');
	
		$sql = "SELECT * FROM car_info WHERE wash = 'Yes' AND serviced = 'Yes' ORDER BY location";
		$result = $conn->query($sql);

	$conn->close()
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
				<h1>Ready Cars</h1>
			</div>
		</div>
		
		<div class="container" style="background-color: #EEEEEE; margin: 20px auto;">
		
	<?php
			
			while($row = $result->fetch_assoc()) {
				
				$date = date_create($row['date_arrived']);
			
			echo "<table class='table table-bordered' style='width: 50%; margin: 20px auto; background-color: white;'>
				<thead>
					<tr>
						<th class='text-center' style='padding: 20px !important;' colspan='2'><p>Spot ".$row['location']."</th>
					</tr>
				</thead>
			
				<tr>
					<td style='font-weight: bold'>Tag</td>
					<td class='small'>".$row['tag_number']."</td>
				</tr>
				<tr>
					<td class='col-md-4' style='font-weight: bold'>Washed</td>
					<td class='small'>".$row['wash']."</td>
				</tr>
				<tr>
					<td style='font-weight: bold'>Serviced</td>
					<td class='small'>".$row['serviced']."</td>
				</tr>
				<tr>
					<td style='font-weight: bold'>Car Model</td>
					<td class='small'>".$row['make_model']."</td>
				</tr>
				<tr>
					<td style='font-weight: bold'>Comments</td>
					<td class='small'>".$row['comments']."</td>
				</tr>
				<tr>
					<td style='font-weight: bold'>Arrival Date</td>
					<td class='small'>".date_format($date, 'd-m-Y')."</td>
				</tr>
				<tr>
					<td colspan='2'><form class='text-center form-horizontal' action='delete_tag.php' method='post'><input class='form-group' type='hidden' name='tag' value='".$row['tag_number']."'><input type='submit' value='Delete Car'></form></td>
				</tr>
				</table>	";
			}
	?>
	<br><br>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<div class="btn-group" role="group">
					<a href="index.php"><button type="button" class="btn btn-default">Home</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="add.html"><button type="button" class="btn btn-default">Add</button></a>
				</div>
				<div class="btn-group" role="group">
					<a href="update.html"><button type="button" class="btn btn-default">Update</button></a>
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