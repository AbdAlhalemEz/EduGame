<!DOCTYPE html>
<html>
<head>
  <title>Insert Quiz Questions</title>
</head>
<body>
  <h1>Insert Quiz Questions into Database</h1>
  <form action="" method="post">
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
          <input type="submit" name="delete" value="Delete all data from quiz table">

  </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $question = $_POST['question'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $answerkey = $_POST['answerkey'];
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "advgaming";
  
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
        
    if (isset($_POST['delete'])) {
    $sql = "DELETE FROM quiz";
    if ($conn->query($sql) === TRUE) {
        echo "All records in the quiz table have been deleted successfully";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}

 if (isset($_POST['submit'])) {   
  
  $sql = "INSERT INTO quiz (id, question, answer1, answer2, answer3, answerkey)
  VALUES ('NULL','$question', '$answer1', '$answer2', '$answer3', '$answerkey')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  
  $conn->close();
}
?>