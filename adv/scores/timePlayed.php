<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advgaming";

// Retrieve POST parameters
$playerId = $_POST["playerId"];
$gameId = $_POST["gameId"];

//$lastPlayed = $_POST["last_played"];

//what to do?
 $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM game_playtime WHERE player_id = '$playerId' AND game_id = '$gameId'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
       // Record doesn't exist, create new one
    $sql = "INSERT INTO game_playtime (player_id, game_id,score1,score2,score3,score4,score5 time_spent, last_played) VALUES ('$playerId', '$gameId', '0' , '0' ,'0' ,'0' ,'0' , '$timeSpent', '$lastPlayed')";

    
}


else{

$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$do=$params['do'];

if($do==1){
    
    $timeSpent = $_POST["time_spent"];

    // Record exists, update time spent
    $row = $result->fetch_assoc();
    $timeSpent += $row["time_spent"];
    $sql = "UPDATE game_playtime SET time_spent = '$timeSpent' WHERE player_id = '$playerId' AND game_id = '$gameId'";

 

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}



if ($do == 2) {
    
    $level = $_POST['level'];

    
    if($level==1){
        
     $score1 = $_POST['score'];       
    // Retrieve the old score1 from the database
    $sql = "SELECT score1 FROM game_playtime WHERE player_id = '$playerId' AND game_id = '$gameId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $old_score1 = $row['score1'];

        // Update the score1 only if the new score1 is greater than the old score1
        if ($score1 > $old_score1) {
            $sql = "UPDATE game_playtime SET score1 = '$score1' WHERE player_id = '$playerId' AND game_id = '$gameId'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "New score1 is not greater than the old score1";
        }
    } 
        
        
        
        
    }

    
    
        
    if($level==2){
        
    $score2 = $_POST['score'];
    // Retrieve the old score2 from the database
    $sql = "SELECT score2 FROM game_playtime WHERE player_id = '$playerId' AND game_id = '$gameId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $old_score2 = $row['score2'];

        // Update the score2 only if the new score2 is greater than the old score2
        if ($score2 > $old_score2) {
            $sql = "UPDATE game_playtime SET score2 = '$score2' WHERE player_id = '$playerId' AND game_id = '$gameId'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "New score2 is not greater than the old score2";
        }
    } 
        
        
        
        
    }
    
    
   if($level==3){

}

    
    if($level==4){
       $score4 = $_POST['score'];
        // Retrieve the old score4 from the database
    $sql = "SELECT score4 FROM game_playtime WHERE player_id = '$playerId' AND game_id = '$gameId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $old_score4 = $row['score4'];

        // Update the score4 only if the new score4 is greater than the old score4
        if ($score4 > $old_score4) {
            $sql = "UPDATE game_playtime SET score4 = '$score4' WHERE player_id = '$playerId' AND game_id = '$gameId'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "New score4 is not greater than the old score4";
        }
    } 
}

    
    
    
    
    
    
}

if($do==3){
    
 
    
    
    
    
    
    // Fetch the value of the onoff column from the row with id 1
$result = mysqli_query($connection, "SELECT onoff FROM control WHERE id=1");
$row = mysqli_fetch_assoc($result);
$onoff_value = $row['onoff'];

// Close the database connection
mysqli_close($connection);

// Convert the onoff value to an integer and store it in a C# variable
$onoff_int = (int)$onoff_value;
    echo $onoff_int;
}




}










$conn->close();
?>
