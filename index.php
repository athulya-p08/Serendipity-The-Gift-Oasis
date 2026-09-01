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
            <li><a href="contact.php"><h3 style="color: white">FAQ</h3></a></li>
            
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

          <div class="icons d-flex" style="color: black;">
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

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">Introducing The Gift World</span>
                  <h1 class="">SERENDIPITY <br>THE<br> GIFT<br> OASIS</h1>
                  <p>Gift collection based on current new trends.</p>
                  <a href="categories.php" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/Bow2.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>Introducing The Gift World</span>
                  <h1>SERENDIPITY <br>THE<br> GIFT<br> OASIS</h1>
                  <p>Gift collection based on current new trends.</p>
                  <a href="bday.php" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/Bow1.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

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

    

    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>RECOMMENDED FOR YOU</h1>
        <p>All the latest gift that you may like.</p>
      </div>

      <div class="product-center">
        <div class="product-item" onclick="document.location='soft_toys.php'">
          <div class="overlay">
            <a href="productDetails.html" class="product-thumb">
              <img src="./images/Teddy.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>SOFT TOYS</span>
            <a href="productDetails.html">Adorable Teddy</a>
            <h4>Rs.699</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart" onclick="addToWishlist('Adorable Teddy', 699, './images/Teddy.jpeg')"></i></li>
            
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='lux_watch.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Watch.jpeg" alt="" />
            </a>
            
          </div>

          <div class="product-info">
            <span>WATCH</span>
            <a href="">Couple's Watch</a>
            <h4>Rs.19999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='vase.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Vase.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>VASE</span>
            <a href="">Mini Flower Vase</a>
            <h4>Rs.499</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='lamp.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Lamp.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>LAMP</span>
            <a href="">Flower Shaped Lamp</a>
            <h4>Rs.1999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='frame.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Photoframe.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>FRAMES</span>
            <a href="">Mini wooden frame</a>
            <h4>Rs.599</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='champagne.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Champagne.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>CHAMPAGNE</span>
            <a href="">Exotic Champagne</a>
            <h4>Rs.4999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='wed_ring.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Rings.jpeg" alt="" />
            </a>
         
          </div>
          <div class="product-info">
            <span>RINGS</span>
            <a href="">Gold Plated Rings</a>
            <h4>Rs.1999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
          
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='exotic_candle.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Candle.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>CANDLE</span>
            <a href="">Exotic Candles</a>
            <h4>Rs.399</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
      </div>
    </section>


  

    <!-- Featured -->
  
    <section class="section new-arrival">
      <div class="title">
        <h1>FREQUENTLY BOUGHT</h1>
        <p>All the frequently accessed gifts from our store</p>
      </div>

      <div class="product-center">
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Perfume.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>PERFUME</span>
            <a href="">Rose Scented Perfume</a>
            <h4>Rs.899</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" onclick="document.location='lux_watch.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Watch.jpeg" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>WATCH</span>
            <a href="">Couple's Watch</a>
            <h4>Rs.3999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
         
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Showpiece.jpeg" alt="" />
            </a>
           
          </div>
          <div class="product-info">
            <span>SHOWPIECE</span>
            <a href="">Beauty & Beast Themed</a>
            <h4>Rs.599</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
           
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/Bag.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>BAG</span>
            <a href="">Black Leather Bag</a>
            <h4>Rs.1999</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
          
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>

    </section>

    <!-- Contact -->
    <section class="section contact">
      <div class="row">
        <div class="col">
          <h2>SERENDIPITY-THE GIFT OASIS</h2>
          <p>Our mission is to provide an exceptional shopping experience offering a wide range of carefully selected gifts that inspire connection and joy.
            <br>We strive to make your shopping experience unforgettable.
          </p>
          
        
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="about.php">About us</a>
          <a href="contact.php">Contact Us</a>
          <a href="">Term & Conditions</a>
          <a href="">Shipping Guide</a>
        </div>
       
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>


  <!-- PopUp -->
 

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
