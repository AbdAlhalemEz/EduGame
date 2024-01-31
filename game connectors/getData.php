<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "AdvGaming@123";
$dbname = "advgaming";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve the top 2 scores with the name and id fields from the database
$sql = "SELECT id, name, score FROM scores ORDER BY score DESC LIMIT 3";
$result = mysqli_query($conn, $sql);

// Build the CSV file
$csv = "id,name,score\n";
while ($row = mysqli_fetch_assoc($result)) {
    $csv .= $row["id"] . "," . $row["name"] . "," . $row["score"] . "\n";
}

// Return the CSV file
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=data.csv");
echo $csv;

// Close the database connection
mysqli_close($conn);
?>
