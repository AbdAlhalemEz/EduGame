<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://advgamin.000webhostapp.com/adv/alertifyjs/css/alertify.min.css">
    <script src="https://advgamin.000webhostapp.com/adv/alertifyjs/alertify.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://advgamin.000webhostapp.com/adv/jquery-3.2.1.min%20(3).js"></script>
    <link rel="stylesheet" href="https://advgamin.000webhostapp.com/adv/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://advgamin.000webhostapp.com/adv/style.css">
    <meta charset="UTF-8">
    <title>Sign in</title>

</head>

<body class="container">
    <form action="" method="post">
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
                    <h1 class="get">
                        SIGN IN
                    </h1>
                    <p class="get2">Call or E-mail Us and Let Us Help You</p>
                    <input style="color:white" type="email" placeholder="Enter your User Name" class="in" id="USERNAME" name="USERNAME" required>
                    <input style="color:white" type="password" placeholder="Enter your Passowrd" class="in" id="PASSWORD" name="PASSWORD" required>
                   
                    <input type="submit" value="submit" name="submit" id="inb"> <br><br><br><br><br><br><br><a href="signup.php" id="a1">dont have account?</a>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-2 imgdiv">
                <img src="https://advgamin.000webhostapp.com/adv/image/play.jpg" alt="" width="100%" height="400px" class="any">
            </div>
        </div>
        <script>
            function myFunction() {
                document.getElementById("pass1").innerHTML = Math.random();
            }

        </script>
        <script src="https://advgamin.000webhostapp.com/adv/app.js"></script>
    </form>
</body>

</html>










<?php

// Include the database connection file
include 'connection.php';

// Start the session
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];

    $resA = mysqli_query($conn, "SELECT * FROM manager WHERE email='$email' AND password='$password'");
    $resultA = mysqli_fetch_array($resA);

    $resFD = mysqli_query($conn, "SELECT * FROM instructor WHERE email='$email' AND password='$password'");
    $resultFD = mysqli_fetch_array($resFD);

    $res = mysqli_query($conn, "SELECT * FROM student WHERE email='$email' AND password='$password'");
    $result = mysqli_fetch_array($res);

    if ($resultA) {
        $resid = mysqli_query($conn, "SELECT id FROM manager WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($resid);
        $id1 = intval($row['id']);

        // Set the value of a session variable
        $_SESSION['id'] = $id1;

        // Redirect to another page
        header('Location: https://advgamin.000webhostapp.com/adv/table.php');
    } else if ($resultFD) {
        $resid = mysqli_query($conn, "SELECT id FROM instructor WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($resid);
        $id1 = intval($row['id']);

        // Set the value of a session variable
        $_SESSION['id'] = $id1;

        // Redirect to another page
        header('Location: https://advgamin.000webhostapp.com/adv/table.php');
    } else if ($result) {
        $resid = mysqli_query($conn, "SELECT id FROM student WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($resid);
        $id1 = intval($row['id']);

        // Set the value of a session variable
        $_SESSION['id'] = $id1;

        // Redirect to another page
        header('Location: student.php');
    } else {
        echo '<h1 style="color:#AFA;text-align:center; font-family:algerian">wrong user name or password please try again</h1>';
    }
}
?>
