<!DOCTYPE html>
<html>
<head>
	<title>Feedback Page</title>
	<style>
		body {
			font-family: 'Segoe UI', sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		h1 {
			font-size: 36px;
			color: #333;
			text-align: center;
			margin-top: 40px;
			margin-bottom: 20px;
		}

		form {
			background-color: #fff;
			border: 1px solid #ccc;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			padding: 20px;
			margin: 0 auto;
			max-width: 600px;
		}

		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
			color: #333;
		}

		textarea {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			resize: vertical;
			height: 150px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #0077cc;
			color: #fff;
			padding: 10px 20px;
			font-size: 18px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #005fa3;
		}
	</style>
</head>
<body>
	<h1>Feedback</h1>
	<form method="post">
		<label for="feedback">Enter your feedback:</label>
		<textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php
// Get the student ID from the session
$stuid = "1";

if(isset($_POST['feedback'])) {
	// Get the feedback from the form
	$feedback = $_POST['feedback'];

	// Connect to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "advgaming";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Prepare the SQL statement
	$stmt = $conn->prepare("INSERT INTO feedback (stuid, feedback, date) VALUES (?, ?, ?)");
	$stmt->bind_param("iss", $stuid, $feedback, $date);

	// Set the parameters
	$date = date("Y-m-d");

	// Execute the statement
	$stmt->execute();

	// Close the statement and the connection
	$stmt->close();
	$conn->close();

	// Redirect to the feedback page
	header("Location: feedback.php?message=success");
	exit();
}
?>
