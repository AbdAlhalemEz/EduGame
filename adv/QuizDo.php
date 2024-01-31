<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
  margin-bottom: 2px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    
}

 
    
input[type=submit]:hover {
  background-color: #45a049;
}

.container{
    background-image: url(image/bg123.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px; color: black;
      
      
}
  
    
</style> 
</head>
<body  class="container">
<h3>Quiz </h3>
<form method="POST">
      
<?php
// Include the database connection file
include 'connection.php';

$sql = "SELECT * FROM quiz";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>Question " . $i . ": " . $row["question"] . "</h3>";
        echo "<input type='radio' name='question" . $i . "' value='1'>" . $row["answer1"] . "<br>";
        echo "<input type='radio' name='question" . $i . "' value='2'>" . $row["answer2"] . "<br>";
        echo "<input type='radio' name='question" . $i . "' value='3'>" . $row["answer3"] . "<br><br>";
        $i++;
    }
}
$conn->close();
?>


<input type="submit" value="Submit">
</form>

   
    
    
    
    




<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the database connection file
    include 'connection.php';

    $sql = "SELECT * FROM quiz";
    $result = $conn->query($sql);

    $grade = 0;
    $num = 0;
    if ($result->num_rows > 0) {
        $i = 1;
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $num++;
            if (isset($_POST["question" . $i]) && $_POST["question" . $i] == $row["answerkey"]) {
                $grade++;
                echo "<p style='color: green;'>Question " . $i . ": Correct</p>";
            } else {
                echo "<p style='color: red;'>Question " . $i . ": Incorrect</p>";
            }
            $i++;
        }
    }
    echo "<p>Your grade is: " . number_format($grade * 100 / $num, 2) . "/100</p>";

    $conn->close();
}
?>


</body>
</html>