<?php
include("./admin/connection.php");
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Just Law | Book Oppointment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-1 col-md-1">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-6">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="#">Specialization</a>
                                        <ul class="submenu">
                                            <?php
                                            $sql_menu = "select * from specialization";
                                            $result_menu = $con->query($sql_menu);
                                            if ($result_menu->num_rows > 0) {
                                                while ($row_menu = $result_menu->fetch_array()) { ?>
                                                    <li><a href="specialization.php?getDoctsp=<?php echo $row_menu[0] ?>"><?php echo $row_menu['Name']; ?></a></li>
                                            <?php }
                                            } ?>
                                        </ul>


                                    </li>
                                    <li><a href="#">Location</a>
                                        <ul class="submenu">
                                            <?php
                                            $sql_menu = "select * from location";
                                            $result_menu = $con->query($sql_menu);
                                            if ($result_menu->num_rows > 0) {
                                                while ($row_menu = $result_menu->fetch_array()) { ?>
                                                     <li><a href="location.php?gelawsp=<?php echo $row_menu[0] ?>"><?php echo $row_menu['Name']; ?></a></li>
                                                    
                                            <?php }
                                            } ?>
                                        </ul>
                                        


                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <!-- Header-btn -->
                        <?php 
                            if(isset($_SESSION["CustomerEmails"])!=null)
                            {
                                echo '   <div class="header-btn d-none d-lg-block f-right">
                                <a href="Customer/index.php" class="btn header-btn">Dashboard</a>
    
    
                            </div>';
                            }
                        else
                        {
                            echo '   <div class="header-btn d-none d-lg-block f-right">
                            <a href="Customer/clientlogin.php" class="btn header-btn">Client Login</a>


                        </div>';
                        }
                        ?>
                     
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
           <div class="container">
           
           
 <div class="legal-practice-area section-padding30" style="margin-top: -100px;">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2>Lawyers</h2>
                        </div>
                    </div>
                </div>

                <!-- single items -->
                <div class="row">

                    <?php
                     $getlaywerID = $_GET["getDoctsp"];
                    $fetchdoc = mysqli_query($con, "SELECT * FROM lawyer
                    INNER JOIN specialization
                    on
                    specialization.S_Id = lawyer.specialization_id where specialization_id='$getlaywerID'");
                    while ($row = mysqli_fetch_array($fetchdoc)) {
                        echo '
                            <div class="col-xl-4 col-lg-3 col-md-6">
                                
                                <div class="single-practice " >
                            
                            <div class="practice-img" >
                                <img src="admin/lawyerimages/' . $row[6] . '" alt="" style="height:250px;">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            
                            <div class="practice-caption">
                               
                            <h4><a href="#">' . $row[1] . '</a></h4>
                                <p>' . $row[5] . '</p>
                               
                                <p>' . $row[2] . '</p>
                               
                                <p>' . $row[11] . '</p>
                                
                                
                                
                            
                        
                            
                                <BR>
                                </div>
                                </div>
                               
                                
                            ';
                            
                    
                    ?>
                    <?php 
                                    if(isset($_SESSION["CustomerEmails"])!=null)
                                    {
                                        echo '
                                        <div class="submit-info">
                                <a href="bookoppointment.php?getlawyerID='.$row[0].'? > "><button class="submit-btn2" type="submit">Book Now</button></a>
                                </div>
                               </div>
                                        ';
                                    }
                                    else
                                    {
                                        echo '
                                        <div class="submit-info">
                                <a href="customer/clientlogin.php"><button class="submit-btn2" type="submit">Login Then Book</button></a>
                                </div>
                               </div>
                                </div> ';

                                       
                                     
                                    }
                                ?>
                               
                               <?php } ?>
               
                    

</div>
                </div>
            </div>

        </div>




           
           </div>                                     
     

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur pisicin elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- footer social -->

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="about.php"> About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="#">Criminal Law</a></li>
                                    <li><a href="#">Political Law</a></li>
                                    <li><a href="#">Property Law</a></li>
                                    <li><a href="#"> Family Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Admin</h4>

                                <!-- Form -->
                                <div class="footer-form">
                                    <div class="header-btn d-none d-lg-block " >
                                        <a href="./admin/adminlogin.php" class="btn header-btn">Admin Login</a>
                                        <a href="./Lawyer/lawyerlogin.php" class="btn header-btn">Lawyer Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->

        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <!-- counter -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>