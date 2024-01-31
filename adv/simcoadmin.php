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
    <title>Simco Admin Home</title>
</head>

<body style="cursor:crosshair" onclick="PlaySound('melody1')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--   ==========nav=======-->
                <div id="nav">
                    <ul id="ul1">
                        <li style="cursor:crosshair" class="li1" id="home"> Travel </li>
                        <li style="cursor:crosshair" class="li1" id="news"> News +</li>
                        <li style="cursor:crosshair" class="li1" id="contact">Contact +</li>
                       
                        <li style="cursor:crosshair" class="li1" id="about"><a href="#last"> About </a></li>
                        
                        <li style="cursor:crosshair" class="li1" id="admin">      <?php
        
         $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            
                            $url_components = parse_url($url);
                            parse_str($url_components['query'], $params);
                            $id1=$params['id'];
        
         $cser=mysqli_connect("localhost","root","","simcore"); //database connectivity
                       $resname=mysqli_query($cser,"select fname,lname from customer where id=$id1");

                         $row = mysqli_fetch_array($resname);
    
                          $fname=strval($row['fname']);
                          $lname=strval($row['lname']);
        

        
      echo  "<a href='table1.php?id=$id1' target='_blank' style='color: antiquewhite'> Admin Panel</a>"
            
            ?> </li>
                        
                        
                        
                        <h3 class="li22" Style="color:red ; width:200px ; text-align: center ;font-size:22px; 
                 padding: 8px;"> Welcome Admin
                            
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
                        
                        
                        echo "$fname";
                
                        ?></h3>
                     

                    </ul>



                    <!--======================saction 1============================-->
                    <div id="sac1">
                        <div class="w3-content w3-display-container">
                            <center> <video width="60%" controls class="mySlides">
                                    <source src="image/2.mp4" type="video/mp4">
                                </video>
                                <video width="60%" controls class="mySlides">
                                    <source src="image/1.mp4" type="video/mp4">
                                </video>
                                <video width="60%" controls class="mySlides">
                                    <source src="image/2.mp4" type="video/mp4">
                                </video>
                            </center>
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                    </div>


                    <!--================section2=======================-->




                    <div class="col-md-4">

                        <div class="container2">
                            <img src="image/pres.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"><a href="#fsth" target="_blank">President Suite</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container2">
                            <img src="image/hwr.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"><a href="#fsth2" target="_blank"> Hollywood King Room</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container2">
                            <img src="image/queen.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"> <a href="#fsth3" target="_blank">The Queen Size room</a> </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-4">
                        <div class="container2">
                            <img src="image/hotel.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"> <a href="http://localhost/dashboard/simcore/room/room.php" target="_blank" style="color:black;" >Choose the option<br>that fits you</a> </div>
                            </div>
                        </div>
                    </div>
                
 <div class="col-md-4"></div>
                    
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
                    <img src="image/pre.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h1 id="fsth">President Suite</h1>
            <p class="fstp1">
                
                
               
             
                

             The Presidential Suites are the most luxurious accommodations that we are proud to offer at the Simcoe Hotel. </p>
            <p class="fstp2">
            It is characterized by its view of the magnificent Simkor Lake and its giant windows that allow you to receive<br> the maximum amount of sunlight.</p>
            <p class="fstp3">
        <br>  In addition, you can enjoy all the features and services offered by our hotel, starting from the gym</p>
            <p class="fstp4">
        <br> access to the swimming pool, basketball court, volleyball and many other services.</p>

            <div class="col-md-12" id="scnddiv">
                <div class="clip-wrap">
                    <img src="image/king.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>





                <h1 id="fsth2">King room</h1>
                <p class="fstp5">

                    A standard king bed room has one standard size king bed and a pull out sofa bed with one bathroom and a small </p>
                <p class="fstp6">area with a coffee maker. It comes with a television and cable box. The pull out sofa is of very good quality for anyone. </p>
                <p class="fstp7"> The room also features a wonderful view of the lake and a large area, and it is a very suitable room for couples.</p>
                
            </div>


            <div class="col-md-12" id="thrddiv">
                <div class="clip-wrap">
                    <img src="image/queenq.jpg" alt="demo-clip-css" class="element" width="500" height="400">
                </div>

                <svg class="clip-svg" width="0" height="0" transform='rotate(100)'>
                    <defs>
                        <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
                            <polygon points="0 30, 0 0, 5 0, 0 1" />
                        </clipPath>
                    </defs>
                </svg>
                <h1 id="fsth3">Queen Room</h1>
                <p class="fstp9">

                    standard Queen rooms are medium-sized rooms andcurrently offer a queen-sized bed,  </p>
                <p class="fstp10">in-suite shower and WC or en suite shower over bath and WC,</p>
                <p class="fstp11"> 32-inch flat panel TV, free and secure wireless internet, and a desk.</p>
                <p class="fstp12"> These rooms are on the interior of the building.</p>
            </div>



        </div>
    </div>

    <div id="btn">

    </div>

    <div id="last">
        <ul class="laul">
            <h1 class="cat">Categories</h1>
            <li class="lali">SERVICES</li>
            <li class="lali">FRONT DESK</li>
            <li class="lali">RESTAURANT</li>
 
        </ul>
        <ul class="laul">
            <h1 class="cat">Information</h1>
            <li class="lali">Specials</li>
            <li class="lali">New offers</li>
            <li class="lali">Top Sellers</li>
            <li class="lali">Our cafe</li>
            <li class="lali">About Us</li>
            <li class="lali">Pages Configuration</li>
            <li class="lali">Sitemap</li>
        </ul>
        <ul class="laul">
            <h1 class="cat">My Account</h1>
            <li class="lali">My Orders</li>
            <li class="lali">My Credits Slips</li>
            <li class="lali">My Address</li>
            <li class="lali">My Personal Info</li>

            <li class="lali">My Vouchers</li>
        </ul>
    </div>
    <div id="store">
        <h1 class="cat">Hotel Information</h1>

        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <p class="our">&nbsp;&nbsp;Thunder bay - Ontario - Canada</p>
        <br>
        <i class="fa fa-phone" aria-hidden="true"></i>

        <p class="our">Email-Us : Support@Simcoe.ca
        </p>
        <br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <?php   
      
        echo "you logged in at  " . date("h:ia"); ?>
          <br><br><br>
        <a href='signin.php' target='_blank' style='color: antiquewhite'> <button class='btn-success'>Log out</button></a>




    </div>



    <script src="smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
    <script src="app.js"></script>
</body>

</html>
