<?php
session_start();
$suname= $_SESSION['uname']; //make .htaccess file to disable the warnings



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/about.css">
    <title>ecommerce Website</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="top-nav">
            <div class="container d-flex">
             
                <ul class="d-flex">
                <li>
              <?php 
              if($suname==""){
                ?>
                <a href="login.html"><h3 style="color:white">Click to login</h3></a> <!-- if session is empty show login a href to user for login -->
                <?php
              }else {

                ?>
                <h3 style="color:white">Welcome:&nbsp;<?php echo $suname;?></h3>
                
                <?php
              }
              ?>
            
            
          
          
          </li>
            <li><span>&nbsp;&nbsp;</span></li>
            <li>
             <?php
             if($suname==''){

              ?>
             
              
              <?php
             }else{
?>
<li><span>&nbsp;&nbsp;</span></li>
<li><span>&nbsp;&nbsp;</span></li>
<li><a href="logout.php"><h3 style="color:white">Log Out</h3></a></li>

<?php

             }
             
             ?> 
            
            </li>
            <li><span>&nbsp;&nbsp;</span></li>        
            <li><span>&nbsp;&nbsp;</span></li>
                    <li><a href="contact.php"><h3 style="color:white">FAQ</h3></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="index.php" class="logo">
                    <h1>Serendipity - The Gift Oasis</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="categories.php" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="terms.html" class="nav-link">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>

                <div class="icons d-flex">
                    <a href="profile.php" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.html" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <a href="wishlist.php" class="icon">
                        <i class="bx bx-heart"></i>
                      </a>
                    <a href="cart.php" class="icon">
                        <i class="bx bx-cart"></i>
                    </a>
                    <a href="logout.php" class ="icon">
                       <i class="bx bx-log-out"></i>
                    </a>
                  </div>
            </div>
            <div class="about-section">
                <h1>About Us</h1>
                <p><h2>Welcome to <strong>Serendipity - The Gift Oasis</strong></h2></p>
                <h2>
                <p class="cool">
                    At Serendipity, we believe that gifts are more than just physical presents. They symbolize love, appreciation, and connection. Our mission is to help you find the perfect gift for any occasion and make the gift-giving experience joyful and memorable.
                </p>
                <p class="cool">
                    We offer gifts that are one of a kind and reflect the personality and style of the giver. Explore our curated collections, carefully designed to suit every taste and celebration.
                </p>
                <p class="cool">
                    Stay up to date with the latest trends from Serendipity. Join our community of gift enthusiasts and share in the joy of thoughtful, unique, and meaningful gifts. Thank you for choosing Serendipity - The Gift Oasis.
                </p>
                </h2>
                <a href="index.php">Shop Now</a>
            </div>
            
            
</body>

</html>