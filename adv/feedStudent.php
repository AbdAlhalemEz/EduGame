<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url('image/123.jpg'); font-size: 30px; color: azure}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: rgba(208, 223, 226, 0.36);
  padding: 20px;
  font-size: 20px; 
    font-family: fantasy;
}
</style>
</head>
<body>

<h3>Feedback Form</h3>

<div class="container">
  <form method="post" >
  
    <label for="Game">Game</label>
    <select id="Game" name="Game">
      <option value="Gravity cannon game">Gravity cannon game</option>
      <option value="football">football</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Your opinion.." style="height:200px"></textarea>

   <button type="submit">submit</button>
  </form>
</div>

  

</body>
</html>

<?php
session_start();
$stuid = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gamename = $_POST['Game'];
    $feedback = $_POST['subject'];
    $date = date('Y-m-d');

    // Include the database connection file
    include 'connection.php';

    // Insert row into feedback table
    $stmt = $conn->prepare("INSERT INTO feedback (stuid, gamename, feedback, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $stuid, $gamename, $feedback, $date);
    $stmt->execute();
    $stmt->close();

    // Close connection
    $conn->close();
}
?>
