	<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<style>
		h1 {
			text-align: center;
			font-size: 2em;
			margin-top: 2em;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 2em;
		}
		input[type=radio] {
			margin: 0.5em;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 1em;
			margin-top: 1em;
			cursor: pointer;
			border-radius: 0.5em;
			font-size: 1.2em;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<?php
		// Establish database connection
		$host = "localhost";
		$username = "id20445083_root";
		$password = "Mi|f8NqQhl1J=&+5";
		$database = "id20445083_advgamin";
	$conn = mysqli_connect($host, $username, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve current onoff value from database
	$query = "SELECT onoff FROM control WHERE id=1";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	$onoff = $row['onoff'];

	// Set H1 title based on current onoff value
	if ($onoff == 0) {
		$title = "No effect applied";
	} elseif ($onoff == 1) {
		$title = "Gifts";
	} elseif ($onoff == 2) {
		$title = "Snow";
	} else {
		$title = "Unknown";
	}

	// Handle form submission
	if(isset($_POST['submit'])) {
	  // Get selected radio value
	  $control = $_POST['control'];

	  // Update database
	  $query = "UPDATE control SET onoff='$control' WHERE id=1";
	  mysqli_query($conn, $query);

	  // Set new onoff value
	  $onoff = $control;

	  // Show success message
	  echo "<script>alert('Updated Game value to $control');</script>";
	}

	// Close database connection
	mysqli_close($conn);
?>

<h1><?php echo $title; ?></h1>

<!-- HTML form with radio buttons -->
<form method="POST">
  <input type="radio" name="control" value="0" <?php if($onoff == '0') echo 'checked'; ?>> No effect applied<br>
  <input type="radio" name="control" value="1" <?php if($onoff == '1') echo 'checked'; ?>> Gifts<br>
  <input type="radio" name="control" value="2" <?php if($onoff == '2') echo 'checked'; ?>> Snow<br>
  <input type="submit" name="submit" value="Update">
</form>

</body>
</html>
