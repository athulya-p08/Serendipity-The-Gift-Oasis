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
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ecommerce Website</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
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
<li><a href="logout.php"><h3 style="color: white">Log Out</h3></a></li>

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
        <a href="index.php" class="logo"><h1>Dive Into A Blissful Experience</h1></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="categories.php" class="nav-link">Categories</a>
              
            </li>
            <li class="nav-item">
            <a href="terms.html" class="nav-link">Terms</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About Us</a>
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
          </div>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

    
   

    <!-- Categories Section -->
    <section class="section category">
      <div class="cat-center">
        <div class="cat" onclick="document.location='bday.php'">
          <img src="./images/bday.jpeg" alt="" />
          <div>
            <p>BIRTHDAY</p>
          </div>
        </div>
      
      
        <div class="cat" onclick="document.location='wedding.php'">
          <img src="./images/Wedd.jpeg" alt="" />
          <div>
            <p>WEDDING</p>
          </div>
        </div>
        <div class="cat" onclick="document.location='children.php'">
          <img src="./images/children.jpeg" alt="" />
          <div>
            <p>CHILDREN</p>
          </div>
        </div>
        </div>
        <br>
        <div class="cat-center">
        <div class="cat" onclick="document.location='selfcare.php'">
          <img src="./images/self care.jpeg" alt="" />
          <div>
            <p>SELF CARE</p>
          </div>
        </div>
        <div class="cat" onclick="document.location='for him_her.php'">
          <img src="./images/for him_her.jpeg" alt="" />
          <div>
            <p>FOR HIM/FOR HER</p>
          </div>
        </div>
        <div class="cat" onclick="document.location='luxury.php'">
          <img src="./images/luxury.jpeg" alt="" />
          <div>
            <p>LUXURY GIFTS</p>
          </div>
        </div>
        </div>
        <br>
        <div class="cat-center">
        <div class="cat" onclick="document.location='hamper.php'">
          <img src="./images/hamper.jpeg" alt="" />
          <div>
            <p>GIFT HAMPERS</p>
          </div>
        </div>
        
        
        <div class="cat" onclick="document.location='decor.php'">
          <img src="./images/house warming.jpeg" alt="" />
          <div>
            <p>HOME DECOR</p>
          </div>
        </div>
        
        <div class="cat" onclick="document.location='festival.php'">
          <img src="./images/festival.jpeg" alt="" />
          <div>
            <p>FESTIVALS</p>
          </div>
          </div>
        </div>
    </section>
    </header>
    </body>
    </html>
