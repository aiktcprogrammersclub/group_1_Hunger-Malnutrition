<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hunger Relief Effort</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
<script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
<script type="text/javascript" src="js/roundabout.js"></script>
<script type="text/javascript" src="js/roundabout_shapes.js"></script>
<script type="text/javascript" src="js/gallery_init.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<header>
  <div class="container">
    <h1><a href="index.html">Hunger Relief Effort</a></h1>
    <nav>
      <ul>
        <li><a href="index.html" class="current">Home</a></li>
        <li><a href="#">Blog</a></li>
		<?php
if(isset($_SESSION['id']))
{
?>
        <li><a href="signup/signup.php">Logout</a></li>
		<?php
}
?>
<?php

else
{
?>
<li><a href="signup/signup.php">Login</a></li>
<?php
}
?>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="signup/signup.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
<section id="gallery">
  <div class="container">
    <ul id="myRoundabout">
      <li><img src="images/slide1.jpg" alt=""></li>
      <li><img src="images/slide2.jpg" alt=""></li>
      <li><img src="images/slide5.jpg" alt=""></li>
      <li><img src="images/slide3.jpg" alt=""></li>
      <li><img src="images/slide4.jpg" alt=""></li>
    </ul>
  </div>
</section>
<div class="main-box">
  <div class="container">
    <div class="inside">
      <div class="wrapper">
        
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</html>
