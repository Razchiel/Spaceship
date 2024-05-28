<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Contact</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
      <style>
      .form-control {
         background-color: transparent;
         border: 1px solid #ccc;
         border-radius: 5px;
         color: #fff; /* Adjust text color for better visibility */
         padding: 10px;
         margin-bottom: 15px;
      }
      .form-control::placeholder {
         color: #fff; /* Adjust placeholder color for better visibility */
      }
      .btn-primary {
         background-color: #007bff;
         border-color: #007bff;
      }
      </style>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.php"><img src="images/image2.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.php"><img src="images/image2.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact us</a></li>
                  <li><a href="comment.php">Comment</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
   <div class="container">
      <p class="banner_text">Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
<form action="proses.php" method="post" name="contactForm" id="contactForm" novalidate>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" required data-validation-required-message="Please enter your name.">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Email Address</label>
      <input type="email" class="form-control" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
      <label>Phone Number</label>
      <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required data-validation-required-message="Please enter your phone number.">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Message</label>
      <textarea class="form-control" placeholder="Message" name="message" required data-validation-required-message="Please enter a message."></textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <br>
  <div id="success"></div>
  <div class="form-group">
   <button type="submit" class="btn btn-primary" name="submit" value="<?php echo date("h:i:sa"); ?>">Submit</button>
  </div>
</form>
i0
      <div class="location_main">
         <div class="call_text"><img src="images/call-icon.png"></div>
         <div class="call_text"><a href="https://wa.me/+62895365579626" target="_blank">Call +62895365579626</a></div>
         <div class="call_text"><img src="images/mail-icon.png"></div>
         <div class="call_text"><a href="mailto:alimulhafiz14@gmail.com" target="_blank">alimulhafiz14@gmail.com</a></div>
      </div>
      <div class="social_icon">
         <ul>
            <li><a href="https://www.facebook.com/AlimmulHafidzXD"><img src="images/fb-icon.png"></a></li>
            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
            <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            <li><a href="https://www.instagram.com/alfhizz_"><img src="images/instagram-icon.png"></a></li>
         </ul>
      </div>
   </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://www.facebook.com/AlimmulHafidzXD" target="_blank">Alimmul Hafidz</a></a></p>
   </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
