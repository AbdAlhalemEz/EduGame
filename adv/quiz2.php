<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
</head>
<body>
  <h1>Quiz</h1>
  <form action="" method="post">
    <?php
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

$sql = "SELECT * FROM quiz";
$result = $conn->query($sql);

$grade = 0;
if ($result->num_rows > 0) {
  $i = 1;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($_POST["question" . $i] == $row["answerkey"]) {
      $grade++;
      echo "<p style='color: green;'>Question " . $i . ": Correct</p>";
    } else {
      echo "<p style='color: red;'>Question " . $i . ": Incorrect</p>";
    }
    $i++;
  }
}
echo "<p>Your grade is: " . $grade . "/" . $i . "</p>";
$conn->close();
}
?>

</body>
</html>