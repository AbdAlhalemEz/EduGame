<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('image/bgin.jpg');
  font-size: 30px;
  color: white; /* Updated to white */
}

/* Add this style to blur the background of the table cells */
table tr td {
  background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
  backdrop-filter: blur(10px); /* Blur effect */
  color: white; /* Text color */
}

* {
  box-sizing: border-box;
}

input[type=text],
select,
textarea {
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

.container {
  background-image: url(image/bgin.jpg);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
  color: white; /* Updated to white */
}

#d1 {
  width: 40%;
  float: left;
}

#d2 {
  margin-left: 10%;
  width: 40%;
  float: left;
}

#quiz-table {
  border: 2px solid black;
  width: 100%;
  margin: auto;
  text-align: center;
  font-size: 12px;
}

th,
td {
  border: 1px solid black;
  padding: 10px;
}

th {
  background-color: #4CAF50;
}

    
    
    
    
    
    
    
    
    
</style>
    
    
</head>
<body  class="container">

<h3>Quiz Form</h3>

<div>
  <form method="POST">
      
      
    <div id="d1">
    <label for="question">Question: </label>
    <input type="text" name="question" id="question" ><br><br>
    <label for="answer1">Answer 1: </label>
    <input type="text" name="answer1" id="answer1" ><br><br>
    <label for="answer2">Answer 2: </label>
    <input type="text" name="answer2" id="answer2" ><br><br>
    <label for="answer3">Answer 3: </label>
    <input type="text" name="answer3" id="answer3" ><br><br>
    <label for="answerkey">Answer Key: </label>
    <input type="text" name="answerkey" id="answerkey" ><br><br>
    <input type="submit" value="Submit" name="submit">
          <input  type="submit" name="delete" value="Delete all data from quiz table">

      </div>
  
<div id="d2">
      <?php


// Create connection
$conn = new mysqli("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin"); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM quiz";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='quiz-table'><tr><th>ID</th><th>Question</th><th>Option 1</th><th>Option 2</th><th>Option 3</th><th>Answer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["question"]  . "</td><td>" . $row["answer1"] . "</td><td>" .  $row["answer2"] . "</td><td>" .  $row["answer3"] . "</td><td>" .  $row["answerkey"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>

      
      
      
      </div>
   

   
  </form>
</div>

   
    
    
    
    


</body>
</html>







<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   // Create connection
  $conn = new mysqli("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin"); 
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    
  $question = $_POST['question'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $answerkey = $_POST['answerkey'];
 
 if (isset($_POST['submit'])) {   
  
$sql = "INSERT INTO quiz (question, answer1, answer2, answer3, answerkey)
        VALUES ('$question', '$answer1', '$answer2', '$answer3', '$answerkey')";

  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
    
    
        if (isset($_POST['delete'])) {
    $sql = "DELETE FROM quiz";
    if ($conn->query($sql) === TRUE) {
        echo "All records in the quiz table have been deleted successfully";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}
  
  $conn->close();
}
?>