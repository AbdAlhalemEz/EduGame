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
    table 
{
    table-layout:fixed;
    width:100%;
    font-size: 10px;
    
}
            .div1 , .div2 , .div3, .div4 , .div5,#Rcus,#Rfd,#mngfd,#mngcus,#mngitm,#mngroom,#Rcus,#Acus,#Ecus,#Rfd,#Afd,#Efd,#Ritm,#Eitm,#Aitm,#Rroom,#Eroom,#Aroom{
            
            display:none;
        }
        
       

        input{
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
        
        button{
              background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
        }
    .container{background-image: url(bgin1.png);
     background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
        h1{
            color: aliceblue;
        }
    
    </style>
    <title>Frnot desk Panel</title>
   
</head>
<body class="container">
         <form method="POST">
            
                    <h6 class="li22" Style=" display:none; color:red ; width:200px ; text-align: center ;font-size:22px; 
                 padding: 8px;">
                            
                            <?php 
                            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            
                            $url_components = parse_url($url);
                            parse_str($url_components['query'], $params);
                            $id1=$params['id'];
                            
                            
                        $cser=mysqli_connect("localhost","root","","simcore"); //database connectivity
                       $resname=mysqli_query($cser,"select fname from admin where id=$id1");

                         $row = mysqli_fetch_array($resname);
    
                          $fname=strval($row['fname']);
                        
                        
                       //echo "$fname";
                
                        ?></h6>
             
             <div style="width:49%; height:500px; float:left;" >
             
                 
                 <!-- Naaaaaaaaaaaaaaav -->
             
<button type="button" id="Button1" onclick="switchVisible1();">Manage Customer</button>
             
                
<button type="button" id="Button4" onclick="switchVisible3();">View prices</button>
                 
<button type="button" id="Button5" onclick="switchVisible5();">View Rooms</button>

                
                
                 
                 <!--  mng customer -->
         
                 <div id="mngcus">
                 <button type="button" class="div1" onclick="rmvc();">remove</button>
                 <button type="button" class="div1" onclick="edtc();">edit</button>
                 <button type="button" class="div1" onclick="addc();">add</button>
        
                     <div id="Rcus">
                      <input type="number" name="custid"  placeholder="Enter the ID to delete">
                      <button type="submit" name="Dcustomer"  >Delete Customer</button>
                     
                     
                     </div> 
                     <div id="Ecus">
                     <input type="number" placeholder="Enter the Id " name="idC"  ><br>
                     
    <input type="text" placeholder="Enter Firstname" name="fnameCE"  ><br>
                     
                   
    <input type="text" placeholder="Enter last name" name="lnameCE"  ><br>
                     
                     
                 
    <input type="email" placeholder="Enter email" name="emailCE"  ><br>
                     
    <input type="password" placeholder="Enter Password" name="passwordCE"  ><br>
                 
                 
                    
    <input type="number" placeholder="Enter phone number" name="phoneCE"  ><br>
                     
                    
    <input type="text" placeholder="Enter Address" name="addressCE"  ><br>
                     
                      <button type="submit" name="Ecustomer" class="div1" style="width:90%;">Edit customer </button>
               
                     
                     
                     
                     </div> 
                     <div id="Acus">
                     
                     
                  
    <input type="text" placeholder="Enter Firstname" name="fnameCA"  ><br>
                     
                   
    <input type="text" placeholder="Enter last name" name="lnameCA"  ><br>
                     
                     
                 
    <input type="email" placeholder="Enter email" name="emailCA"  ><br>
                     
    <input type="password" placeholder="Enter Password" name="passwordCA"  ><br>
                 
                 
                    
    <input type="number" placeholder="Enter phone number" name="phoneCA"  ><br>
                     
                    
    <input type="text" placeholder="Enter Address" name="addressCA"  ><br>
                     
      <button type="submit" name="Acustomer" class="div1" style="width:90%;">Add Customer</button>
                
                
                 </div>
     
                     </div>
                     
           
                  <!--  mng front desk
         
                              
                 <div id="mngfd">
                 <button type="button"  onclick="rmvfd();">remove</button>
                 <button type="button"  onclick="edtfd();">edit</button>
                 <button type="button"  onclick="addfd();">add</button>
        
                     <div id="Rfd">
                         
                <input type="number" name="DFid"  placeholder="Enter the ID to delete">
                         
                <button type="submit" name="Dfd" >remove front desk</button>
  
                     </div> 
                     <div id="Efd">
                     <input type="number" placeholder="Enter the Id " name="EFid"  ><br>
                     
    <input type="text" placeholder="Enter Firstname" name="fnameEF"  ><br>
                     
                   
    <input type="text" placeholder="Enter last name" name="lnameEF"  ><br>
                     
                     
                 
    <input type="email" placeholder="Enter email" name="emailEF"  ><br>
                     
    <input type="password" placeholder="Enter Password" name="passwordEF"  ><br>
                 
                 
                    
    <input type="number" placeholder="Enter phone number" name="phoneEF"  ><br>
                     
                    
    <input type="text" placeholder="Enter Address" name="addressEF"  ><br>
                     
                      <button type="submit" name="EFD"  style="width:90%;">Edit front disk </button>
               
                     
                     
                     
                     </div> 
                     <div id="Afd">
                     
                     
                     
    <input type="text" placeholder="Enter Firstname" name="fnameAF"  ><br>
                     
                   
    <input type="text" placeholder="Enter last name" name="lnameAF"  ><br>
                     
                     
                 
    <input type="email" placeholder="Enter email" name="emailAF"  ><br>
                     
    <input type="password" placeholder="Enter Password" name="passwordAF"  ><br>
                 
                 
                    
    <input type="number" placeholder="Enter phone number" name="phoneAF"  ><br>
                     
                    
    <input type="text" placeholder="Enter Address" name="addressAF"  ><br>
                     
      <button type="submit" name="AFD"  style="width:90%;">Add frontdesk</button>
                
                
                 </div>
                 
                  
                     
                     
                     </div>
  
                  -->
                  <!--  mng Items 
                              
                 <div id="mngitm">
                 <button type="button"  onclick="rmvitm();">remove</button>
                 <button type="button"  onclick="edtitm();">edit</button>
                 <button type="button"  onclick="additm();">add</button>
        
                     <div id="Ritm">
                     <input type="number" name="itmid"  placeholder="Enter the ID to delete">
                 
                     <button type="submit" name="Ditm" >Delete Item</button>
                     
                     
                     
                     
                     
                     </div> 
                     
                     
                     <div id="Eitm">
                     <input type="number" placeholder="Enter the Id " name="id"  ><br>
                     
    <input type="text" placeholder="Enter item name" name="itmname1"  ><br>
                     
                   
    <input type="number" placeholder="Enter item price" name="itmprc1"  ><br>
     
                     
                      <button type="submit" name="Eitm"  style="width:90%;">Edit item </button>
               
                     
                     
                     
                     </div> 
                     <div id="Aitm">
                         
             <input type="text" placeholder="Enter item name" name="itmname"  ><br>
                     
                   
    <input type="number" placeholder="Enter item price" name="itmprc"  ><br>
           
                      <button type="submit" name="Aitm"  style="width:90%;">add item </button>
               
                
                 </div>
                 
                  
                     
                     
                     </div>
            -->
         
              
                                  
                  <!--  mng rooms 
         
                              
                 <div id="mngroom">
                 <button type="button"  onclick="rmvroom();">remove</button>
                 <button type="button"  onclick="edtroom();">edit</button>
                 <button type="button"  onclick="addroom();">add</button>
        
                     <div id="Rroom">
                     <input type="number" name="roomid"  placeholder="Enter the ID to delete">
                 
                     <button type="submit" name="Droom" >Delete room</button>
                     
                     
                     
                     
                     
                     </div> 
                     
                     
                     <div id="Eroom">

                                 <input type="number" name="Eroomid"  placeholder="Enter room ID to edit it"><br>
              
                                     
                           <label for="room" style="color:white;">Choose type :</label>
  <select name="Etype" id="Etype">
    <option value="room">room</option>
    <option value="suite">suite</option>
  </select>
  <br><br>
                         
<label for="room" style="color:white;"id="Ebedl">Choose bed size :</label>
  <select name="Ebed" id="Ebed">
    <option value="king">King</option>
    <option value="queen">queen</option>
  </select>
  <br class="Ebr" ><br class="Ebr">
                                                  
<label for="room" style="color:white;">Facing the lake :</label>
  <select name="Efl" id="fl">
    <option value="yes">Yes</option>
    <option value="no">No</option>
  </select>
  <br><br>
  
  
                      <button type="submit" name="Eroom"  style="width:90%;">Edit item </button>
               
                     
                     
                     </div> 
                     <div id="Aroom">
                         
                                   <label for="room" style="color:white;" onchange="myFunction(this.value)">Choose type :</label>
  <select name="Atype" id="Atype">
    <option value="room">room</option>
    <option value="suite">suite</option>
  </select>
  <br><br>
                         
<label for="room" style="color:white;" id="Abedl">Choose bed size :</label>
  <select name="Abed" id="Abed">
    <option value="king">King</option>
    <option value="queen">queen</option>
  </select>
    <br class="Abr" ><br class="Abr">
     
                                                  
<label for="room" style="color:white;">Facing the lake :</label>
  <select name="Afl" id="fl">
    <option value="yes">Yes</option>
    <option value="no">No</option>
  </select>
  <br><br>
  
  
                      <button type="submit" name="Aroom"  style="width:90%;">add item </button>
               
                
                 </div>
                 
                  
                     
                     
                     </div>
            
       -->
                 
                 
                 </div>
        
<div  style="width:49%; height:500px; float:left;" >
             
   
    <div class="row"  id="div1" >
         <div class="div1">
      <?php
$con=mysqli_connect("localhost","root","","simcore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,fname,lname,email,address FROM customer");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>ID</th>
<th>First name</th>
<th>Last name</th>
<th>email</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
     </div>
     </div>
     
   
              
      
    <div class="row"  id="div4" >
                        <div class="div4">
      <?php
$con=mysqli_connect("localhost","root","","simcore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,item,price FROM price");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>Id</th>
<th>Item</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] ."</td>";
echo "<td>" . $row['item'] ."</td>";
echo "<td>" . $row['price'] ." $". "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
     </div>
                        </div>
                 
         
        
    <div class="row"  id="div5" >
                        <div class="div5">
      <?php
$con=mysqli_connect("localhost","root","","simcore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,type,bedsize,lakefront FROM room");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>Id</th>
<th>Type</th>
<th>Bed Size</th>
<th>Lake Front</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] ."</td>";
echo "<td>" . $row['type'] ."</td>";
echo "<td>" . $row['bedsize'] . "</td>";
echo "<td>" . $row['lakefront'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
                            
                  <h3 style="color:white;">available rooms</h3>          
                            
          <?php
$con=mysqli_connect("localhost","root","","simcore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
                            
    
$result = mysqli_query($con,"SELECT id,type,bedsize,lakefront FROM room WHERE id NOT IN (SELECT room_id FROM bookedroom)");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>Id</th>
<th>Type</th>
<th>Bed Size</th>
<th>Lake Front</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] ."</td>";
echo "<td>" . $row['type'] ."</td>";
echo "<td>" . $row['bedsize'] . "</td>";
echo "<td>" . $row['lakefront'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>        
<h3 style="color:white;">Booked rooms</h3>          
                   
            <?php
$con=mysqli_connect("localhost","root","","simcore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
                            
    
$result = mysqli_query($con,"SELECT id,type,bedsize,lakefront FROM room WHERE id IN (SELECT room_id FROM bookedroom)");

echo "<table border='1' style='color: white;  '  >
<tr >
<th>Id</th>
<th>Type</th>
<th>Bed Size</th>
<th>Lake Front</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr >";
echo "<td>" . $row['id'] ."</td>";
echo "<td>" . $row['type'] ."</td>";
echo "<td>" . $row['bedsize'] . "</td>";
echo "<td>" . $row['lakefront'] . "</td>";
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
$("#mngcus").show();
$("#mngfd").hide();
$("#mngitm").hide();
$("#mngroom").hide();
$(".div2").hide();
$(".div3").hide();
$(".div4").hide();
$(".div5").hide();
            
}
        
     function rmvc() {
$("#Rcus").show();
$("#Ecus").hide();
$("#Acus").hide();    
}
 
     function edtc() {
$("#Rcus").hide();
$("#Ecus").show();
$("#Acus").hide();    
}

     function addc() {
$("#Rcus").hide();
$("#Ecus").hide();
$("#Acus").show();    
}
        
        
        
        
        
        
        
    function switchVisible2() {
   
$("#mngcus").hide();
$("#mngfd").show();
$("#mngitm").hide();
$("#mngroom").hide();
        
$(".div1").hide();
$(".div2").show();
$(".div3").hide();
$(".div4").hide();
$(".div5").hide();
              
            
}   
        
        
         function rmvfd() {
$("#Rfd").show();
$("#Efd").hide();
$("#Afd").hide();    
}
 
     function edtfd() {
$("#Rfd").hide();
$("#Efd").show();
$("#Afd").hide();    
}

     function addfd() {
$("#Rfd").hide();
$("#Efd").hide();
$("#Afd").show();    
}    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            function switchVisible3() {
                
$("#mngcus").hide();
$("#mngfd").hide();
$("#mngroom").hide();
$("#mngitm").show();    
                
$(".div1").hide();
$(".div2").hide();
$(".div3").hide();
$(".div4").show();
$(".div5").hide();
              
            
}        
        
        
          function rmvitm() {
$("#Ritm").show();
$("#Eitm").hide();
$("#Aitm").hide();    
}
 
     function edtitm() {
$("#Ritm").hide();
$("#Eitm").show();
$("#Aitm").hide();    
}

     function additm() {
$("#Ritm").hide();
$("#Eitm").hide();
$("#Aitm").show();    
}       
        
        
        
        
        
               
function switchVisible4() {
$("#mngcus").hide();
$("#mngfd").hide();
$("#mngitm").hide();    
$("#mngroom").hide();    
  
$(".div1").hide();               
$(".div2").hide();
$(".div4").hide();
$(".div3").show();
$(".div5").hide();
                      
} 
        
        
function switchVisible5() {
$("#mngcus").hide();
$("#mngfd").hide();
$("#mngitm").hide(); 
$("#mngroom").show(); 
    
  
$(".div1").hide();               
$(".div2").hide();
$(".div4").hide();
$(".div3").hide();
$(".div5").show();
                      
}      
    
              function rmvroom() {
$("#Rroom").show();
$("#Eroom").hide();
$("#Aroom").hide();    
}
 
     function edtroom() {
$("#Rroom").hide();
$("#Eroom").show();
$("#Aroom").hide();    
}

     function addroom() {
$("#Rroom").hide();
$("#Eroom").hide();
$("#Aroom").show();    
}       

    
    
$('#Atype').change(function(){
    if($(this).val() == "suite"){
       $("#Abed").hide();  
       $("#Abedl").hide();  
       $(".Abr").hide();  
    }
    
    else{
        $("#Abed").show();  
       $("#Abedl").show(); 
       $(".Abr").show(); 
        
    }
});
    
    $('#Etype').change(function(){
    if($(this).val() == "suite"){
       $("#Ebed").hide();  
       $("#Ebedl").hide();  
       $(".Ebr").hide();  
    }
    
    else{
        $("#Ebed").show();  
       $("#Ebedl").show(); 
       $(".Ebr").show(); 
        
    }
})
     
    
        
    </script>
</html>






<?php 
$cser=mysqli_connect("localhost","root","","simcore"); //database connectivity





// delete customer

if(isset($_POST['Dcustomer']))
{
    $custid =filter_input(INPUT_POST, 'custid');
    $res = mysqli_query($cser,"DELETE FROM customer WHERE id='$custid'");  
    
  //  echo '<script>alert("Customer has been deleted")</script>';
 
}

//add customer
if(isset($_POST['Acustomer']))
{
$fname = filter_input(INPUT_POST, 'fnameCA');  $lname = filter_input(INPUT_POST, 'lnameCA');
$address = filter_input(INPUT_POST, 'addressCA'); $phone = filter_input(INPUT_POST, 'phoneCA');
$password = filter_input(INPUT_POST, 'passwordCA'); $email = filter_input(INPUT_POST, 'emailCA');
    
$res = mysqli_query($cser,"INSERT INTO customer (fname ,lname,email,password,phone,address)
values('$fname','$lname','$email','$password','$phone','$address')");  

}

// edit customer
if(isset($_POST['Ecustomer']))
{
$id = filter_input(INPUT_POST, 'idC');
$fname = filter_input(INPUT_POST, 'fnameCE');  $lname = filter_input(INPUT_POST, 'lnameCE');
$address = filter_input(INPUT_POST, 'addressCE'); $phone = filter_input(INPUT_POST, 'phoneCE');
$password = filter_input(INPUT_POST, 'passwordCE'); $email = filter_input(INPUT_POST, 'emailCE');
    
$res = mysqli_query($cser,"UPDATE `customer` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `password` = '$password', `phone` = '$phone', `address` = '$address' WHERE `customer`.`id` = $id;");  

}




if(isset($_POST['Dfd']))
{
      $id =filter_input(INPUT_POST, 'DFid');
 
    
    $res = mysqli_query($cser,"DELETE FROM frontdisk WHERE id='$id'");  
}


if(isset($_POST['AFD']))
{
$fname = filter_input(INPUT_POST, 'fnameAF');  $lname = filter_input(INPUT_POST, 'lnameAF');
$address = filter_input(INPUT_POST, 'addressAF'); $phone = filter_input(INPUT_POST, 'phoneAF');
$password = filter_input(INPUT_POST, 'passwordAF'); $email = filter_input(INPUT_POST, 'emailAF');


$res = mysqli_query($cser,"INSERT INTO frontdisk (fname ,lname,email,password,phone,address,admin_id)
  values('$fname','$lname','$email','$password','$phone','$address','1')");  
    
  
 
}


if(isset($_POST['EFD']))
{
    $id = filter_input(INPUT_POST, 'EFid');
$fname = filter_input(INPUT_POST, 'fnameEF');  $lname = filter_input(INPUT_POST, 'lnameEF');
$address = filter_input(INPUT_POST, 'addressEF'); $phone = filter_input(INPUT_POST, 'phoneEF');
$password = filter_input(INPUT_POST, 'passwordEF'); $email = filter_input(INPUT_POST, 'emailEF');

  
$res = mysqli_query($cser,"UPDATE `frontdisk` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `password` = '$password', `phone` = '$phone', `address` = '$address' WHERE `frontdisk`.`id` = '$id';");  
  
    
}


// remove item

if(isset($_POST['Ditm']))
{

$id =    filter_input(INPUT_POST, 'itmid');
   $res = mysqli_query($cser,"DELETE FROM price WHERE id='$id'");  

}


// Add item 

if(isset($_POST['Aitm']))
{

$name =  filter_input(INPUT_POST, 'itmname');  
$price = filter_input(INPUT_POST, 'itmprc');
     
$res = mysqli_query($cser," INSERT INTO `price` (`id`, `item`, `price`) VALUES (NULL, '$name', '$price');");  
  
}


//edite item

if(isset($_POST['Eitm']))
{
$id =    filter_input(INPUT_POST, 'id');
$name =  filter_input(INPUT_POST, 'itmname1');  
$price = filter_input(INPUT_POST, 'itmprc1');
    

$res = mysqli_query($cser,"UPDATE `price` SET `item` = '$name', `price` = '$price' WHERE `price`.`id` = $id;" );  

}











// remove room

if(isset($_POST['Droom']))
{

$id =    filter_input(INPUT_POST, 'roomid');
   $res = mysqli_query($cser,"DELETE FROM room WHERE id='$id'");  

}


// Add room 

if(isset($_POST['Aroom']))
{

$type = $_POST['Atype'];  
$bedsize = $_POST['Abed'];  
$fl = $_POST['Afl'];  
   
    
$res = mysqli_query($cser," INSERT INTO `room` (`id`, `type`, `bedsize`, `lakefront`) VALUES (NULL, '$type', '$bedsize', '$fl');");  
  
}


//edite room

if(isset($_POST['Eroom']))
{
$id =    filter_input(INPUT_POST, 'Eroomid');
    
$type = $_POST['Etype'];  
$bedsize = $_POST['Ebed'];  
$fl = $_POST['Efl'];  
    
  

$res = mysqli_query($cser,"UPDATE `room` SET `type` = '$type', `bedsize` = '$bedsize', `lakefront` = '$fl'  WHERE `room`.`id` = $id;" );  

}




?>







