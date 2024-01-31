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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--   ==========nav=======-->
                <div id="nav">
                    <ul id="ul1">
                        <li style="cursor:crosshair" class="li1" id="home"> Home </li>
                        <li style="cursor:crosshair" class="li1" id="news"> News +</li>
                        <li style="cursor:crosshair" class="li1" id="contact">Contact +</li>
                        <li style="cursor:crosshair" class="li1" id="about"><a href="#last"> About </a></li>
                        <h3 class="li22" Style="color:red ; width:200px ; text-align: center ;font-size:22px; 
                 padding: 8px;"> Welcome
                            
                          <?php
// Start a new session
session_start();
$id1 = $_SESSION['id'];

// Include the database connection file
include 'connection.php';

$cser = $conn; // Use the connection from connection.php

$resname = mysqli_query($cser, "SELECT fname FROM student WHERE id=$id1");
$row = mysqli_fetch_array($resname);

$fname = strval($row['fname']);
echo "$fname";
?>

                        </h3>
                      

                    </ul>



                    <!--======================saction 1============================-->
                    <div id="sac1">
                        <div class="w3-content w3-display-container">
                            <center> <video width="60%" controls class="mySlides">
                                    <source src="image/1.mp4" type="video/mp4">
                                </video>
                                <video width="60%" controls class="mySlides">
                                    <source src="image/2.mp4" type="video/mp4">
                                </video>
                                <video width="60%" controls class="mySlides">
                                    <source src="image/1.mp4" type="video/mp4">
                                </video>
                            </center>
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                    </div>


                    <!--================section2=======================-->




                    <div class="col-md-4">

                        <div class="container2">
                            <img src="image/cannon.png" alt="Cannon Gravity Game" class="image">
                            <div class="overlay">
                                <div class="text">
                                    
                                    
                                                     <?php
                                    
                                    
                                      echo  "<a href='game1.php' target='_blank' style='color:black;' ><h1 style='color:black;'>Cannon VS Gravity</h1> </a>";
            
            ?>
                                
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container2">
                            <img src="image/space.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">
                                    
                                   
                                    
                                    
                                      <a href='#' target='' style='color:black;' ><h1 style='color:black;'>Space Planets</h1> </a>
            
            
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container2">
                            <img src="image/car.png" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"> <a href="#" target=""><h1 style="color:black;">Speed Cars</h1></a> </div>
                            </div>
                        </div>
                    </div> 
                  
                
                    
                    <!--     ==============slide1==============-->
                    <div id="slide1">
                        <ul id="ul2">
                            <li CLASS="li2"> <a href="#fsth1">Deals</a></li>
                            <li CLASS="li2"> <a href="#fsth2">Gift cards</a></li>
                            <li CLASS="li2"> <a href="#fsth3">Group vacation</a></li>
                        </ul>
                        <img src="image/deal.jpg" alt="slide1" id="img1">
                        <img src="image/gift.jpg" alt="slide1" id="img1">
                        <img src="image/group.jpg" alt="slide1" id="img1">
                    </div>
                    <!--      ==================== slide 2============-->
                    <div id="slide2">
                        <ul id="ul2">
                            <li CLASS="li2">Whats New?</li>
                            <li CLASS="li2"> Important Dates </li>
                            
                     
                        </ul>
                        <p style="size:10px;" id="newsp"> limited time offers, check it below
                                  <br> New olympic size pool 
                                 <br>  New basketball court</p>
                        <img src="image/hotel.jpg" alt="slide1" id="img10">
                        
                        <!--
                        <img src="image/FIFA-18-Beta-No-Code-Here-s-when-the-demo-will-release-on-PS4-and-Xbox-One-636989.jpg" alt="call of duty" id="img1">
                        <img src="image/need%20for%20sbeed.jpg" alt="call of duty" id="img1">
-->
                    </div>
                    <!--      ======================= slide 3==============-->
                    <div id="slide3">
                        <ul id="ul2">
                            <li CLASS="li2">LIVE CHAT SUPPORT</li>
                            <li CLASS="li2"> OUR LOCATION</li>
                            <li CLASS="li2">OUR E-MAIL</li>
                        </ul>
                        <p id="newsp">We Can Help <br> YOU <br> Any Time and Any Date</p>
                        <img src="image/images.jpg" alt="call of duty" id="img1">

                    </div>
                    <!--     ================= slide 4==========================-->
                    <div id="slide4">
                        <ul id="ul2">
                            <li CLASS="li2"><a href=""></a>FIFA 20</li>
                            <li CLASS="li2">Battel field</li>
                            <li CLASS="li2">NEED FOR SPEED</li>
                        </ul>
                        <img src="image/call_of_duty_black_ops-1280x720.jpg" alt="call of duty" id="img1">
                        <img src="image/FIFA-18-Beta-No-Code-Here-s-when-the-demo-will-release-on-PS4-and-Xbox-One-636989.jpg" alt="call of duty" id="img1">
                        <img src="image/need%20for%20sbeed.jpg" alt="call of duty" id="img1">
                    </div>
                </div>





            </div>
        </div>
        <div class="empty"></div>
        <div class="row">
            <div class="col-md-12" id="fstdiv">
                <div class="clip-wrap">
                    <img src="image/inter.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h1 id="fsth">Interactivity:</h1>
            <p class="fstp1">
      
             The key feature of our educational games website is its high level of interactivity.  </p>
            <p class="fstp2">
            We believe that the best way to learn is through active engagement, so we have designed our games to be <br>engaging and immersive. With interactive quizzes, puzzles, and challenges, our website will keep users  </p>
            <p class="fstp3">
        <br>  engaged and entertained while they learn.By providing a range of activities that cater By providing
</p>
            <p class="fstp4">
        <br>a range of activities that cater to different learning styles, we ensure that our website is accessible to a wide<br> range of learners.</p>

            <div class="col-md-12" id="scnddiv">
                <div class="clip-wrap">
                    <img src="image/cust.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>





                <h1 id="fsth2">Customizability:</h1>
                <p class="fstp5">

                    Another key feature of our website is its customizability. We understand that every learner is unique, </p>
                <p class="fstp6"> and so we have designed our website to cater to individual learning preferences.</p>
                <p class="fstp7"> Users can customize the games they play by adjusting the difficulty level or choosing specific topics  </p>
                 <p class="fstp8">they want to focus on. This level of personalization ensures that users are able to learn at </p>
                <br><br>
                 <p class="fstp8">
                their own pace and in a way that is most effective for them.
                </p>
            </div>


            <div class="col-md-12" id="thrddiv">
                <div class="clip-wrap">
                    <img src="image/mult.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>
                <h1 id="fsth3">Multidisciplinarity:</h1>
                <p class="fstp9">

                    Our website features educational games across a range of disciplines, from language learning to science </p>
                <p class="fstp10">and math. By providing a multidisciplinary approach to learning, we encourage users to explore different </p>
                <p class="fstp11">subjects and develop a well-rounded understanding of the world. Our website features games that are</p>
                <p class="fstp12"> both informative and fun, making it easy for users to engage with new topics and concepts. available, With</p>
                <br><br>
                <p class="fstp12">  a range of educational games
                 users can tailor their learning experience to their own interests and goals.</p>

        </div>
    </div>

    <div id="btn">

    </div>
    <div id="btn" style="color: antiquewhite">
        YOU CAN ADD YOUR FEEDBACK HERE :
       <?php
// Start a new session
session_start();
$id1 = $_SESSION['id'];

// Include the database connection file
include 'connection.php';

$cser = $conn; // Use the connection from connection.php

$resname = mysqli_query($cser, "SELECT fname, lname FROM student WHERE id=$id1");
$row = mysqli_fetch_array($resname);

$fname = strval($row['fname']);
$lname = strval($row['lname']);

echo "<a href='feedBack.php' target='_blank' style='color: antiquewhite'><button class='btn-success'>FEEDBACK</button></a>";
?>

    </div>
    <div id="last">
        <ul class="laul">
            <h1 class="cat">Categories</h1>
            <li class="lali">SERVICES</li>
            <li class="lali">Student Central</li>
            <li class="lali">Our office</li>
 
        </ul>
        <ul class="laul">
            <h1 class="cat">Information</h1>
            <li class="lali">Specials</li>
            <li class="lali">New offers</li>
            <li class="lali">Our vision</li>
            <li class="lali">About Us</li>
            <li class="lali">Pages Configuration</li>
            <li class="lali">Sitemap</li>
        </ul>
        <ul class="laul">
            <h1 class="cat">My Account</h1>
            <li class="lali">My games</li>
            <li class="lali">My Credits Slips</li>
            <li class="lali">My Address</li>
            <li class="lali">My Personal Info</li>
            <li class="lali">My Vouchers</li>
        </ul>
    </div>
    <div id="store">
        <h1 class="cat">Our website Information</h1>

        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <p class="our">&nbsp;&nbsp;Thunder bay - Ontario - Canada</p>
        <br>
        <i class="fa fa-phone" aria-hidden="true"></i>

        <p class="our">Email-Us : Advgaming@lakeheadu.ca
        </p>
        <br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <?php   
      
        echo "you logged in at  " . date("h:ia"); ?>
        

        
        <br><br><br>
        <button class="btn-success" type="submit" name="logout">Log out</button>
 


    </div>

    </div>

    <script src="smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
    <script src="app.js"></script>
</body>

</html>




