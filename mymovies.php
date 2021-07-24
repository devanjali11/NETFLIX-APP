<?php
session_start();
include("dbcon.php");
?>
<!doctype html>
<html lang="en-US">
   
<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 03:49:37 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit - Responsive Bootstrap 4 Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- Responsive -->
      <link rel="stylesheet" href="css/responsive.css" />
      <style>
    video{
     float: left;
    }
    </style>
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Header -->
      <header id="main-header">
         <div class="main-header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <div class="navbar-toggler-icon" data-toggle="collapse">
                              <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                           </div>
                        </a>
                        <a class="navbar-brand" href="index.php"> <img class="img-fluid logo" src="images/logo.png"
                           alt="streamit" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <div class="menu-main-menu-container">
                              <ul id="top-menu" class="navbar-nav ml-auto">
                                 <li class="menu-item">
                                    <a href="index.php">Home</a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="sign-up.html">Register</a>
                                 </li>
                                 
                                 <?php
                                 if(isset($_SESSION['login_status'])){
                                 if($_SESSION['login_status']==1){
                                    ?>
                                 <li class="menu-item">
                                    <a href="upload.php">Upload Video</a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="mymovies.php">My Videos</a>
                                 </li>
                                  <li class="menu-item">
                                    <a href="logout.php">Logout</a>
                                 </li>
                                 <?php
                                 }
                                 else{
                                    echo "<li class=\"menu-item\"><a href=\"login.html\">Login</a></li>";
                                 }
                                 }
                                 else{
                                    ?>
                                    <li class="menu-item">
                                    <a href="login.html">Login</a>
                                 </li>
                                 <?php
                                 }
                                 ?>
                              </ul>
                           </div>
                        </div>
                        <div class="mobile-more-menu">
                           <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                              data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                           <i class="ri-more-line"></i>
                           </a>
                           <div class="more-menu" aria-labelledby="dropdownMenuButton">
                              <div class="navbar-right position-relative">
                                 <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                   
                                  <?php
                                 if(isset($_SESSION['login_status'])){
                                 if($_SESSION['login_status']==1){
                                    ?>
                                    <li>
                                       <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                       <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle"
                                          alt="user">
                                       </a>
                                       <div class="iq-sub-dropdown iq-user-dropdown">
                                          <div class="iq-card shadow-none m-0">
                                             <div class="iq-card-body p-0 pl-3 pr-3">
                                              
                                               
                                                <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-settings-4-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Pricing Plan</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="logout.php" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-logout-circle-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0">Logout</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <?php
                                 }
                                 else
                                 {
                                    echo "<li class=\"menu-item\">Welcome Guest!!</li>";
                                 }
                                 
                                 }
                                 else{
                                    ?>
                                    <li class="menu-item">
                                    Welcome Guest!!
                                 </li>
                                 <?php
                                 }
                                 ?>
                                    
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="navbar-right menu-right">
                           <ul class="d-flex align-items-center list-inline m-0">
                              <?php
                                 if(isset($_SESSION['login_status'])){
                                 if($_SESSION['login_status']==1){
                                    ?>
                              <li class="nav-item nav-icon">
                                 <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                    data-toggle="search-toggle">
                                 <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>
                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                         
                                         
                                          <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-settings-4-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Pricing Plan</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="logout.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-logout-circle-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Logout</h6>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                               <?php
                                 }
                                 else
                                 {
                                    echo "<li class=\"menu-item\">Welcome Guest!!</li>";
                                 }
                                 
                                 }
                                 else{
                                    ?>
                                    <li class="menu-item">
                                    Welcome Guest!!
                                 </li>
                                 <?php
                                 }
                                 ?>
                                    
                           </ul>
                        </div>
                     </nav>
                     <div class="nav-overlay"></div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->
      <!-- Slider Start -->
      <section id="home" class="iq-main-slider p-0">
         <div id="home-slider" class="slider m-0 p-0">
            <div class="slide slick-bg s-bg-1">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                              data-delay-in="0.6">bushland</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                              <span class="badge badge-secondary p-2">18+</span>
                              <span class="ml-3">2 Seasons</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="1.2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                              <a href="show-details.html" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="show-details.html" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slide slick-bg s-bg-2">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">sail coaster</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                              <span class="badge badge-secondary p-2">16+</span>
                              <span class="ml-3">2h 40m</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                              <a href="movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="movie-details.html" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slide slick-bg s-bg-3">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">the army</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                              <span class="badge badge-secondary p-2">20+</span>
                              <span class="ml-3">3h</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                              <a href="movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="movie-details.html" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
               fill="none" stroke="currentColor">
               <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
         </svg>
      </section>
      <!-- Slider End -->
      <!-- MainContent -->
      <div class="main-content">
         <section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title"><a href="movie-category.html">Your Uploaded Videos</a></h4>                      
                     </div>
                    <div>
                        <table border="1" width="80%">
                        <tr>
                           <th>Title</th>
                           <th>Upload Date</th>
                           <th>Upload By</th>
                           <th>Play</th>
                           
                        </tr>
                         <?php
                         $fetchVideos = mysqli_query($connection, "SELECT title,upload_date,upload_by,file_url FROM upload_video where upload_by='{$_SESSION['email']}' ORDER BY id DESC");
                         while($row = mysqli_fetch_assoc($fetchVideos)){
                         
                     
                            echo "<tr>";
                            echo "<td>". $row["title"]."</td>";
                            echo "<td>".$row["upload_date"]."</td>";
                            echo "<td>".$row["upload_by"]."</td>";
                            echo "<td><a href=\"watch-video.php?fn=".$row["file_url"]."\" class=\"text-primary ml-2\">Click Here to Play</a></td>";
                            echo "</tr>";
                         }
                         ?>
                 </table>
                    </div>
                    <br /><br /><br />
                  </div>
               </div>
            </div>
         </section>
         
        
      </div>
      <footer class="mb-0">
         <div class="container-fluid">
            <div class="block-space">
               <div class="row">
                  <div class="col-lg-3 col-md-4">
                     <ul class="f-link list-unstyled mb-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="movie-category.html">Movies</a></li>
                        <li><a href="show-category.html">Tv Shows</a></li>
                        <li><a href="#">Coporate Information</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <ul class="f-link list-unstyled mb-0">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <ul class="f-link list-unstyled mb-0">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Cotact Us</a></li>
                        <li><a href="#">Legal Notice</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-12 r-mt-15">
                     <div class="d-flex">
                        <a href="#" class="s-icon">
                        <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" class="s-icon">
                        <i class="ri-skype-fill"></i>
                        </a>
                        <a href="#" class="s-icon">
                        <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="s-icon">
                        <i class="ri-whatsapp-fill"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright py-2">
            <div class="container-fluid">
               <p class="mb-0 text-center font-size-14 text-body">STREAMIT - 2020 All Rights Reserved</p>
            </div>
         </div>
      </footer>
      <!-- MainContent End-->
      <!-- back-to-top -->
      <div id="back-to-top">
         <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
      </div>
      <!-- back-to-top End -->
      <!-- jQuery, Popper JS -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Slick JS -->
      <script src="js/slick.min.js"></script>
      <!-- owl carousel Js -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- select2 Js -->
      <script src="js/select2.min.js"></script>
      <!-- Magnific Popup-->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Slick Animation-->
      <script src="js/slick-animation.min.js"></script>
      <!-- Custom JS-->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 03:49:37 GMT -->
</html>