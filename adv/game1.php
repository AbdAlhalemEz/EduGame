<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
    <script src="alertifyjs/alertify.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>GA|ME Station</title>
</head>

<body style="cursor:crosshair" onclick="PlaySound('melody1')">
    <form action="" method="post">
   
                   <ul id="ul1">
                        <li style="cursor:crosshair" class="li1" id="home"><a href="student.php?id=$id1">  Home </a></li>
                        <li style="cursor:crosshair" class="li1" id="news"> News +</li>
                        <li style="cursor:crosshair" class="li1" id="contact">Contact +</li>
                        <li style="cursor:crosshair" class="li1" id="about"><a href="#last"> About </a></li>
                        <h3 class="li22" Style="color:red ; width:200px ; text-align: center ;font-size:22px; 
                 padding: 8px;"> Welcome
                            
                           
                          <?php 
                           // Start a new session
                    session_start();
                       $id1 = $_SESSION['id'];
                       $cser=mysqli_connect("localhost","id20445083_root","Mi|f8NqQhl1J=&+5","id20445083_advgamin");  //database connectivity
                       $resname=mysqli_query($cser,"select fname from student where id=$id1");

                       $row = mysqli_fetch_array($resname);
    
                       $fname=strval($row['fname']); 
                       echo "$fname";
                       ?>
                            
                            
                        </h3>
                      

                    </ul>
    
         <div id="sac1">
                        <div class="w3-content w3-display-container">
                            <center> <video width="50%" controls class="mySlides">
                                    <source src="image/2.mp4" type="video/mp4">
                                </video>
                                <video width="50%" controls class="mySlides">
                                    <source src="image/1.mp4" type="video/mp4">
                                </video>
                                <video width="50%" controls class="mySlides">
                                    <source src="image/2.mp4" type="video/mp4">
                                </video>
                            </center>
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                    </div>
   
    

    
                        <center>
                            
                           
    
    
                            <div style="float:left; width:100%;">
                                   <div class="col-md-6">
                        <div class="container2">
                            <img src="image/cannon.png" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"> <a href="https://drive.google.com/file/d/1tBvKn45t7hcm9BwnJPChLgl2gWVmewdo/view?usp=share_link" target=""><h1 style="color:black;">Cannon Vs Gravity</h1></a> </div>
                            </div>
                        </div>
                    </div> 
   <button class='btn-success'> <a href='https://advgamin.000webhostapp.com/adv/QuizDo.php' target='_blank' style='color: antiquewhite'>Press here for the Quiz</a></button>
                                
                              
    
     <a href='#' target='_blank' style='color: antiquewhite'> <button class='btn-success'>Press here for the survey</button></a>
                                </div>
                            
    </center>
    <script src="smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
    <script src="app.js"></script>
    </form>
</body>

</html>



