<?php
// Database credentials
$servername = "localhost";
$username = "id20445083_root";
$password = "Mi|f8NqQhl1J=&+5";
$dbname = "id20445083_advgamin";

//$lastPlayed = $_POST["last_played"];

//what to do?
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    
    // Fetch the value of the onoff column from the row with id 1
$result = mysqli_query($conn, "SELECT onoff FROM control WHERE id=1");
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($result);
$onoff_value = $row['onoff'];
    
    
    
    

    // Convert the onoff value to an integer and store it in a C# variable
    $onoff_int = (int)$onoff_value;
    echo $onoff_int;

    // Close the database connection
    $conn->close();
}
?>
