<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url('bgi.jpg'); font-size: 30px; color: azure}
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

input[type=submit] {
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
  <form method="POST">
      
      
       

    <label for="S">Choose from the options below:</label>
      
    <select id="option1" name="option1" onchange="getValue1(this)">
      <option >--</option>
      <option value="Services">Services</option>
      <option vale="Front Disk">Front Disk</option>
     
    </select>
      
      
      
      
      
      <div style="display:none" id="option2">
      
<label  for="S">Please Choose the front disk agent name:</label><br>
      <select  name='option2' value=''>
      
      <?php    
        $cser=mysqli_connect("localhost","root","","simcore"); //database connectivity
                    
      $sql="SELECT fname,lname,id FROM frontdisk order by fname"; 


      //echo "<select name='student' value=''>Student Name"; // list box select command
//echo "<option >--</option>"; 

foreach ($cser->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[fname]>  $row[fname] $row[lname]</option>"; 

/* Option values are added by looping through the array */ 

}
  
      
      ?>
          
     
</select>
      
      </div>
      

    <label for="subject">Subject</label>
    <textarea id="comment" name="comment" placeholder="Write your feedback here.." style="height:200px"></textarea>


    <a href="">  <input type="submit" name="submit" value="Submit feedback" ></a>
  </form>
</div>

   
    <?php 
  /*  $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
     $url_components = parse_url($url);
                            parse_str($url_components['query'], $params);
                            $fname=$params['name'];
   // echo"<h1>$fname</h1>";
*/
    ?>
    
    
    
    
    <script>function getValue1(option) {
            
            
  //  alert(option.value);
            
            if(option.value=="Services"||option.value=="--")
                option2.style.display = 'none';
            else{
                option2.style.display = 'block';

            }      
}
    
    </script>
    
 

</body>
</html>







<?php

/* 
get customername from the link
 $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
     $url_components = parse_url($url);
                            parse_str($url_components['query'], $params);
                            $fname=$params['name'];
                            */


$ftype = filter_input(INPUT_POST, 'option1');
$comment = filter_input(INPUT_POST, 'comment');
$date = date('d-m-y h:i:s');
$host = "localhost";  $dbusername = "root";  $dbpassword = ""; $dbname = "simcore";
    
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);






$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            
                            $url_components = parse_url($url);
                            parse_str($url_components['query'], $params);
                            $id1=$params['id'];



 // echo '<script>alert("tessssssssssssssssssssssssssssssssssst")</script>';
 
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}

else{

 if(isset($_POST['submit'])){
    
    if($comment!="") {
        
        
        
       $selected = $_POST['option1'];
       if($selected=="--"){
   echo '<script>alert("Please Choose from the options.")</script>';
       }
        
        else if($selected=="Services"){
             
             $sql = "INSERT INTO feedback (cusid,feedback,date)
                     values('$id1','$comment','$date')";
               //do the quiry
        if($conn->query($sql)){
             echo '<script>alert("Thank you for your feedback.");
                  window.close();</script>';
  
            
        }
        
            
   
       }
        
        
         else if($selected=="Front Disk"){
              $selected2 = $_POST['option2'];
             $comment2="feedback about the front disk staff $selected2 :\n $comment  " ;
           
             
               $sql = "INSERT INTO feedback (cusid,feedback,date)
                     values('$id1','$comment2','$date')";
             
               if($conn->query($sql)){
             echo '<script>alert("Thank you for your feedback.");
                  window.close();</script>';
  
            
        }
         }
  
        else{
            
            
        }
        
        
        
    }
     
     //if comment is empty
     else{
           echo '<script>alert("Please provide us with your feedback.")</script>';
  
         
     }
     
     


    }



}







  //  $res = mysqli_query($conn,"select* from customer where email='$email'");
    //$result=mysqli_fetch_array($res);   




?>













