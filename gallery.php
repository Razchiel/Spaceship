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
   <title>Gallery</title>
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

</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.php"><img src="images/logo 4 (3).png"></a></div>
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
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Space Objects and Phenomena</h1>
         <p class="services_text">Embark on a cosmic adventure and learn about stars, galaxies, black holes, and more.</p>
      </div>
   </div>

   <!-- Gallery section with Bootstrap grid -->
<div class="container">
    <div class="row">
        <!-- Gallery item 1 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Planet">
                    <img src="planets.jpg" alt="planets">
                </a>
                <div class="desc">
                    <h3>Planets</h3>
                    <p>Planets are captivating celestial bodies that orbit stars. They come in various sizes and possess
                        unique characteristics. While Earth supports life, others remain shrouded in mystery.
                        Planetary exploration reveals the secrets of our neighboring worlds.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 2 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Star">
                    <img src="stars.jpg" alt="stars">
                </a>
                <div class="desc">
                    <h3>Stars</h3>
                    <p>Stars are the building blocks of the universe, varying in size, color, and temperature.
                        Understanding star size comparisons allows us to appreciate the vast diversity of these luminous
                        objects, from tiny red dwarfs to massive supergiants.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 3 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Galaxy">
                    <img src="galaxy.jpg" alt="galaxy">
                </a>
                <div class="desc">
                    <h3>Galaxy</h3>
                    <p>Galaxies are vast collections of stars, gas, and dust held together by gravity. They come in
                        various shapes and sizes. Exploring galaxies opens a window to the universe's evolution and the
                        mysteries of dark matter. Our Milky Way is just one among billions of galaxies in the cosmos.
                    </p>
                </div>
            </div>
        </div>

        <!-- Repeat the above structure for other gallery items -->
        <!-- Gallery item 1 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Black_hole">
                    <img src="blackhole.jpg" alt="black hole" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Black hole</h3>
                    <p>Black holes are enigmatic regions in space where gravity is so strong that nothing.
                       They are formed from the remnants of massive stars and play a crucial role in the cosmos.
                       Journeying to black holes unveils the mysteries of space-time and challenges our current understanding of physics.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 2 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Nebula">
                    <img src="nebula.jpg" alt="nebula" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Nebula</h3>
                    <p>Nebulae are celestial clouds of gas and dust where stars are born. 
                       They come in various shapes and colors, each telling a unique story of cosmic creation. 
                       Nebulae serve as stellar nurseries, giving birth to new stars, and are often found in regions of active star formation.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 3 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Supernova">
                    <img src="supernova.jpg" alt="supernova" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Supernova</h3>
                    <p>Supernovae are powerful explosions that mark the end of a massive star's life cycle.
                       They release immense energy and create heavy elements essential for life.
                       The study of supernovae provides insights into the cosmos' evolution and the origins of the elements that make up our world.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 1 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Big_Bang">
                    <img src="bigbang.jpg" alt="Big Bang" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Big Bang</h3>
                    <p>The Big Bang is the prevailing cosmological model that explains the origin of the universe. 
                        It posits that the universe began as a singularity and has been expanding ever since. 
                        This theory has revolutionized our understanding of the cosmos and its origins.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 2 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Gamma-ray_burst">
                    <img src="gammarayburst.jpg" alt="Gamma Ray Burst" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Gamma Ray Burst</h3>
                    <p>Gamma-ray bursts (GRBs) are the most energetic and luminous explosions in the universe. 
                       They release intense bursts of gamma-ray radiation and can be caused by supernovae or merging neutron stars. 
                       The study of GRBs provides insights into the extreme processes in the cosmos.</p>
                </div>
            </div>
        </div>

        <!-- Gallery item 3 -->
        <div class="col-md-4">
            <div class="gallery">
                <a target="_blank" href="https://en.wikipedia.org/wiki/Quasar">
                    <img src="quasar.jpg" alt="Quasar" width="300" height="200">
                </a>
                <div class="desc">
                    <h3>Quasar</h3>
                    <p>Quasars are incredibly luminous and energetic objects powered by supermassive black holes at the centers of distant galaxies.
                       They emit vast amounts of energy and are some of the most distant objects observed in the universe. 
                       Studying quasars sheds light on the early universe and black hole</p>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- services section end -->
   
   
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://www.facebook.com/AlimmulHafidzXD" target="_blank">Alimmul Hafidz</a></a></p>
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