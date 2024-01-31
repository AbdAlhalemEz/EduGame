<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
   <script src="alertifyjs/alertify.min.js"></script>
   <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
 <script src="jquery-3.2.1.min%20(3).js"></script>
  <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
   <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Sign up</title>
   
</head>
<body class="container">
         <form method="POST" action="" name="f1">
            
             
     <div class="row">
        <div class="col-md-2 ">
             <div id="icons">
          <i class="fa fa-facebook fa1" aria-hidden="true"></i>
          <br>
          <i class="fa fa-twitter fa1" aria-hidden="true"></i>
          <br>
          <i class="fa fa-instagram fa1" aria-hidden="true"></i>
          <br>
        </div>
        </div>
         <div class="col-md-3 col-md-offset-1">
             <div class="form">
                 <h3 class="get">
                  REGISTER 
                 </h3>
                
                 <input style="color:white" type="text" placeholder="First Name" class="in"  id="fname" name="fname" onkeyup="showHint(this.value)" required>
                 <input style="color:white" type="text" placeholder="last name" class="in" id="lname" name="lname" required>
                 <input style="color:white" type="text" placeholder="E-mail Address" class="in" id="emale" name="email" required>
                 <input style="color:white" type="password" placeholder="Enter your password" class="in" id="pass" name="password" required>
                 <input style="color:white" type="number" placeholder="grade" class="in" id="grade" name="grade" required>
                 
                <input style="color:white" type="text" placeholder="address" class="in" id="address" name="address" required>


               <p style="color:white" >Suggestions: <span id="txtHint" style="color:white"></span></p>
                 <center><h3 type="number"  class="in" id="demo" name="id"></h3></center>
                 
                               <input type="submit" value="submit" name="submit" id="inb"><br>
                 
  
                   <a href="signin.php" id="a1">I am already member </a>  
         
             </div>
             
         </div>
         <div class="col-md-6 col-md-offset-2 imgdiv">
         <img src="image/play.jpg" alt="" width="100%" height="400px" class="any">
       
        
         </div>
     </div>
      
    </form>
   <script>
function myFunction() {
    document.getElementById("pass1").innerHTML = Math.random();
}
</script>
    <script src="app.js"></script>
         
    
    


    
    
    

<script>
$(document).ready(function () {  document.getElementById("demo").innerHTML ="your id is :" + Math.floor((Math.random() * 100000000) + 500000); });
</script>

    
    
    
    
 


    
    <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
    </script>
    
    

</body>
</html>



















<?php

// Include the database connection file
include 'connection.php';

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$address = filter_input(INPUT_POST, 'address');
$grade = filter_input(INPUT_POST, 'grade');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$id = filter_input(INPUT_POST, 'id');

if (!empty($fname)) {
    if (!empty($password)) {

        $res = mysqli_query($conn, "SELECT * FROM student WHERE email='$email'");
        $result = mysqli_fetch_array($res);

        if (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]/", $email)) {
            echo '<h1 style="color:#AFA;text-align:center; font-family:algerian">Email not valid</h1>';
        } else if ($result) {
            echo '<h1 style="color:#AFA;text-align:center; font-family:algerian">This Email is already in use.</h1>';
        } else {
            $sql = "INSERT INTO student (fname, lname, email, password, grade, address, manid)
                    VALUES ('$fname', '$lname', '$email', '$password', '$grade', '$address', '1')";

            if ($conn->query($sql)) {
                echo("<script>location.href = 'https://advgamin.000webhostapp.com/adv/signin.php';</script>");
            } else {
                echo "Error: " . $sql . " " . $conn->error;
            }
        }
    } else {
        echo '<h1 style="color:#AFA;text-align:center; font-family:algerian">Password should not be empty</h1>';
        die();
    }
} else {
    echo '<h1 style="color:#AFA;text-align:center; font-family:algerian">Username should not be empty</h1>';
    die();
}

$conn->close();
?>
