<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
    <script src="alertifyjs/alertify.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.2.1.min%20(3).js"></script>
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">

    <meta charset="UTF-8">
    <style>
        .switch-container {
            display: flex;
            align-items: center;
        }

        .switch-container p {
            margin-right: 10px;
            color: white;
        }
        /* Add this style to blur the background of the table cells */
table tr td {
  background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
  backdrop-filter: blur(10px); /* Blur effect */
  color: white; /* Text color */
}

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin-left: 20px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* The text */
        .switch p {
            color: white;
            display: inline-block;
            margin-right: 10px;
        }


        table {
            table-layout: fixed;
            width: 100%;
            font-size: 10px;

        }

        .div1,
        .div2,
        .div3,
        .div4,
        .inst{

            display: none;
        }

        .com,
        .Aitem,
        .Eitem,
        .Ritem {
            display: none;
        }

        input {
            width: 70%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input:focus {
            background-color: #ddd;
            outline: none;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 30%;
            opacity: 0.9;
        }

        .container {
            background-image: url(image/bgin.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        h1 {
            color: aliceblue;
        }

    </style>
    <title>Admin page</title>

</head>

<body class="container">
    <form method="POST" action="" name="f1">
  <?php 
                           // Start a new session
                    session_start();
        
        if(!isset($_SESSION['id'])) {
  header("Location: signin.php?msg=Session%20not%20correct, %20 please%20 login%20 again");
  exit(); // stop further execution of the script
}else
                       $manid = $_SESSION['id']; 
        
        
        ?>

        <div style="width:45%; height:500px; float:left;">


            <button type="button" id="Button1" onclick="switchVisible1();">Manage student</button>

            <button type="button" id="Button2" onclick="switchVisible2();">Manage Instructer</button>

            <button type="button" id="Button3" onclick="switchVisible3();">Show feedbacks</button>



            <?php
  $conn = mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");
  $result = mysqli_query($conn, "SELECT onoff FROM control WHERE id=1");
  $row = mysqli_fetch_assoc($result);
  $onoff = $row["onoff"];

  if(isset($_POST['switch'])){
    $new_onoff = $onoff == 1 ? 0 : 1;
    $sql = "UPDATE control SET onoff = '$new_onoff' WHERE id = 1";
    if (mysqli_query($conn, $sql)) {
      $onoff = $new_onoff;
    } else {
      echo "Error updating on/off value: " . mysqli_error($conn);
    }
  }

  if(isset($_POST['onoff'])) {
    $new_onoff = $_POST['onoff'];
    $sql = "UPDATE control SET onoff = '$new_onoff' WHERE id = 1";
    if (mysqli_query($conn, $sql)) {
      $onoff = $new_onoff;
    } else {
      echo "Error updating on/off value: " . mysqli_error($conn);
    }
  }
?>
            <button type="button" id="Button4" onclick="switchVisible4();">Manage scores</button>
             <button class='btn-success'> <a href='https://advgamin.000webhostapp.com/adv/QuizC.php' target='_blank' style='color: antiquewhite'>Create a quiz</a></button>
                         

            <div class="switch-container">
                <p><?php echo $onoff == 0 ? 'The game is not available' : 'The game is available'; ?></p>
                <label class="switch">
                    <form method="POST">
                        <input type="hidden" name="onoff" value="<?php echo $onoff == 1 ? 0 : 1; ?>">
                        <input type="checkbox" name="switch" <?php if($onoff == 1) { echo 'checked'; } ?> onchange="this.form.submit()" style="display:none;">
                        <span class="slider round"></span>
                    </form>
                </label>
            </div>




            <div>
                <br>
                <form method="POST">
                    <button type="submit" name="Dstudent" class="div1">Delete student</button>
                    <button type="submit" name="DiD" class="div2">Delete instructer</button>

                    <input type="number" name="studid" class="div1" placeholder="Enter the ID to delete">
                    <input type="number" name="instid" class="div2" placeholder="Enter the ID to delete">
                </form>
            </div>

            <h1 class="div1" style="width:90%;">Add Student</h1>

            <h1 class="div2">Add Instructer</h1>




            <!-- Items -->
            <div class="div4">


                <!-- Add a button to reset all scores to 0 -->
                <form method="post">
                    <button type="submit" name="reset" value="Reset All Scores">Reset All Scores</button>
                </form>

                <div class="Aitem"><a> add</a></div>
                <div class="Eitem"> edit</div>
                <div class="Ritem"> remove</div>


            </div>


            <div class="com">










                <input type="text" placeholder="Enter Firstname" name="fname" required><br>


                <input type="text" placeholder="Enter last name" name="lname" required><br>



                <input type="email" placeholder="Enter email" name="email" required><br>

                <input type="password" placeholder="Enter Password" name="psw" required><br>



                <input type="number" placeholder="Enter Grade number" name="Grade" required><br>


                <input type="text" placeholder="Enter Address" name="address" required><br>


            </div>
            <button type="submit" name="Astudent" class="div1" style="width:90%;">Add student</button>

            
            <form method="post">
            
            <div class="div2">
            
                <input type="text" placeholder="Enter Firstname" name="Ifname" required><br>


                <input type="text" placeholder="Enter last name" name="Ilname" required><br>



                <input type="email" placeholder="Enter email" name="Iemail" required><br>

                <input type="password" placeholder="Enter Password" name="Ipsw" required><br>



                <input type="text" placeholder="Enter spi " name="Ispi" required><br>


                <input type="text" placeholder="Enter Address" name="Iaddress" required><br>
                
                <input type="number" placeholder="Enter phone" name="Iphone" required><br>
                

            </div>
            
            
            

            
            <button type="submit" name="AFD" class="div2">Add Instructor</button>

            </form>









        </div>










        <div style="width:45%; height:500px; float:left;">



            <div class="row" id="div1">
                <div class="div1">
                    <?php
             
$con=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,fname,lname,email,grade,address FROM student");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Grade</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                </div>
            </div>





            <div class="row" id="div2">
                <div class="div2">
                    <?php
$con=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,fname,lname,phone,email,address FROM instructor");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>phone</th>
<th>email</th>
<th>address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                </div>
            </div>









            <div class="row" id="div3">
                <div class="div3">
                    <?php
$con=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT stuid,feedback,date FROM feedback");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>Student Id</th>
<th>feedback</th>
<th>Date of feedback</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['stuid'] . "</td>";
echo "<td>" . $row['feedback'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
    
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                </div>
            </div>





            <div class="row" id="div4">
                <div class="div4">


                    <?php
$con=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// If the reset button is clicked, update all scores to 0
if(isset($_POST['reset'])) {
  mysqli_query($con,"UPDATE game_playtime SET score1 = 0, score2 = 0, score3 = 0");
  echo "<div style='color: white;'>All scores have been reset to 0.</div>";
}

$result = mysqli_query($con,"SELECT student.fname AS player_fname, games.name AS game_name, game_playtime.score1, game_playtime.score2, game_playtime.score3, game_playtime.time_spent, game_playtime.last_played FROM game_playtime INNER JOIN student ON game_playtime.player_id = student.id INNER JOIN games ON game_playtime.game_id = games.id");

echo "<table border='1' style='color: white;'>
<tr>
<th>Player Name</th>
<th>Game Name</th>
<th>Score 1</th>
<th>Score 2</th>
<th>Score 3</th>
<th>Time Spent</th>
<th>Last Played</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['player_fname'] ."</td>";
  echo "<td>" . $row['game_name'] ."</td>";
  echo "<td>" . $row['score1'] ."</td>";
  echo "<td>" . $row['score2'] ."</td>";
  echo "<td>" . $row['score3'] ."</td>";
  echo "<td>" . $row['time_spent'] ."</td>";
  echo "<td>" . $row['last_played'] ."</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>










                </div>
            </div>







        </div>


    </form>










</body>

<script>
    function switchVisible1() {

        $(".div1").show();
        $(".com").show();
        $(".div2").hide();
        $(".div3").hide();
        $(".div4").hide();
       }

    function switchVisible2() {

        $(".div1").hide();
       $(".com").hide();
        $(".div2").show();
        $(".inst").show();
        $(".div3").hide();
        $(".div4").hide();
        $(".inst").show();


    }


    function switchVisible3() {

        $(".div1").hide();

        $(".com").hide();
        $(".div2").hide();
        $(".div4").hide();
        $(".div3").show();


    }

    function switchVisible4() {

        $(".div1").hide();

        $(".com").hide();
        $(".div2").hide();
        $(".div3").hide();
        $(".div4").show();



    }



    function Aitem() {

        $(".Aitem").show();
        $(".Eitem").hide();
        $(".Ritem").hide();
        $(".div4").hide();



    }

    function Eitem() {

        $(".Aitem").hide();
        $(".Eitem").show();
        $(".Ritem").hide();



    }

    function Ritem() {

        $(".Aitem").hide();
        $(".Eitem").hide();
        $(".Ritem").show();



    }

</script>

</html>






<?php 
$cser=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin"); //database connectivity
$studid =filter_input(INPUT_POST, 'studid');
$instid =filter_input(INPUT_POST, 'instid');
echo $studid;

if(isset($_POST['Dstudent']))
{
    $res = mysqli_query($cser,"DELETE FROM student WHERE id='$studid'");  
}

if(isset($_POST['DiD']))
{
    $res = mysqli_query($cser,"DELETE FROM instructor WHERE id='$instid'");  
}




?>






<?php


$conn =mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin"); //database connectivity

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['Astudent'])) {
 // Get the values from the form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$grade = $_POST['Grade'];
$address = $_POST['address'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement with placeholders
$stmt = $conn->prepare("INSERT INTO student (fname, lname, email, password, grade, address, manid) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind the variables to the placeholders in the SQL statement
$stmt->bind_param("ssssisi", $fname, $lname, $email, $password, $grade, $address, $manid);

// Execute the SQL statement
$stmt->execute();

// Close statement and connection
$stmt->close();

  $conn->close();
}

if (isset($_POST['AFD'])) {
  // Get the values from the form
  $fname = $_POST['Ifname'];
  $lname = $_POST['Ilname'];
  $email = $_POST['Iemail'];
  $password = $_POST['Ipsw'];
  $ispi = $_POST['Ispi'];
  $address = $_POST['Iaddress'];
  $phone = $_POST['Iphone'];
  // Set the value of manid
  $manid = 1;

  // Build the SQL statement with escaped values
  $sql = "INSERT INTO instructor (fname, lname, special, email, password, phone, manid, address) VALUES ('" . 
    mysqli_real_escape_string($conn, $fname) . "', '" .
    mysqli_real_escape_string($conn, $lname) . "', '" .
    mysqli_real_escape_string($conn, $ispi) . "', '" .
    mysqli_real_escape_string($conn, $email) . "', '" .
    mysqli_real_escape_string($conn, $password) . "', '" .
    mysqli_real_escape_string($conn, $phone) . "', " .
    intval($manid) . ", '" .
    mysqli_real_escape_string($conn, $address) . "')";

  // Execute the SQL statement
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}

?>
