<?php
include('dbcon.php');
session_start();
?>
<!doctype html>
<html lang="en-US">

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 03:50:33 GMT -->
<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Streamit - Responsive Bootstrap 4 Template</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico"/>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style -->
   <link rel="stylesheet" href="css/style.css"/>
   <!-- Responsive -->
   <link rel="stylesheet" href="css/responsive.css"/>
</head>
<body>
<div id="loading">
   <div id="loading-center">
   </div>
</div>

<!-- MainContent -->
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                  <?php
    
     
      
      
                        if(isset($_POST['email']) && isset($_POST['pass']))
                       {
                          
                          $email=$_POST['email'];
                          $pass=$_POST['pass'];
                           //$connection = mysqli_connect("localhost","root","","netflix");
                           $query=$query = "SELECT * FROM login WHERE email='$email' AND password='$pass'";
                           $result=$connection->query($query);
                           if($result)
                          {
                             $_SESSION['login_status']=1;
                             $_SESSION['email']=$email;
                             
                             header('location: index.php');
                          }
                          else
                          {
                             echo " <h3 class=\"mb-3 text-center\">Invalid UserId or Password!!!</h3>";
                          
                          }
                          $connection->close();
                       }
                     
                     ?>
                     
                     
                  </div>
               </div>    
              
            </div>
         </div>
      </div>
   </div>
</section>
<!-- MainContent End-->
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

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 03:50:33 GMT -->
</html>

