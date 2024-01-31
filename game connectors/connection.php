<?php

$servername = "localhost";
$username = "id20445083_root";
$password = "Mi|f8NqQhl1J=&+5";
$dbname = "id20445083_advgamin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
