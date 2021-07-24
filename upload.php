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
   <title>Video Upload Form</title>
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
                            
                         
                            if(isset($_POST['but_upload'])){
                               $maxsize = 36214400; // 35MB
                         
                               $name = $_FILES['filev']['name'];
                               $wall = $_FILES['filew']['name'];
                               
                               $target_dir = "video/";
                               $target_file = $target_dir . $_FILES["filev"]["name"];
                        
                                $wall_dir="images/";
                                $target_wall=$wall_dir . $_FILES["filew"]["name"];
                               // Select file type
                               $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        
                               // Valid file extensions
                               $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
                        
                               // Check extension
                               if( in_array($videoFileType,$extensions_arr) ){
                         
                                  // Check file size
                                  if(($_FILES['filev']['size'] >= $maxsize) || ($_FILES["filev"]["size"] == 0)) {
                                    echo "<h5 class=\"mb-3 text-center\">File too large. File must be less than 35MB.</h5>";
                                  }else{
                                    // Upload
                                    if(move_uploaded_file($_FILES['filev']['tmp_name'],$target_file)){
                                      // Insert record
                                      move_uploaded_file($_FILES['filew']['tmp_name'],$target_wall);
                                      $email=$_SESSION['email'];
                                      
                                      $timezone = new DateTimeZone("UTC" );
                                      $date = new DateTime();
                                      $date->setTimezone($timezone );
                                      $udate=$date->format( 'H:i:s A  /  D, M jS, Y' );
                                        $title=$_POST['title'];
                                      $query = "INSERT INTO upload_video(title,upload_date,upload_by,file_url,wallpaper) VALUES('".$title."','".$udate."','".$email."','".$target_file."','".$target_wall."')";
                        
                                      mysqli_query($connection,$query);
                                      echo "<h5 class=\"mb-3 text-center\">Upload successfully.</h5><a href=\"mymovies.php\" class=\"text-primary ml-2\"><h5 class=\"mb-3 text-center\">Click Here to Go Movies Page.</h5></a>";
                                    }
                                  }
                        
                               }else{
                                  echo "<h5 class=\"mb-3 text-center\">Invalid file extension.</h5>";
                               }
                         
                             } 
                    ?>
                  
                  
                  
                     <h3 class="mb-3 text-center">Upload Video</h3>
                     <form class="mt-4" action="" method="post" enctype='multipart/form-data'>
                        <div class="form-group">                                 
                           <input name="title" type="text" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter Video Title" autocomplete="off" required>
                        </div>
                        <div class="form-group">                                 
                          Choose Video File to Upload.. <input type='file' name='filev' />
                        </div>
                        <div class="form-group">                                 
                           Choose Video wallpaper.. <input type='file' name='filew' />
                        </div>  
                                          
                           
                        <button type="submit" class="btn btn-hover" name='but_upload'>Upload</button>
                                                           
                     </form>
                  </div>
               </div>    
              <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     If Upload Complete .... <a href="index.php" class="text-primary ml-2">Click Here to Go Home</a>
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