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
    <link rel="stylesheet" href="./css/checkout.css">
    <title>Serendipity</title>
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
                      <a href="login.html"><h3 style="color: white">Click to login</h3></a> <!-- if session is empty show login a href to user for login -->
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
        </div>
        <div class="roww">
            <div class="ccol-75">
              <div class="ccontainer">
                <form action="/action_page.php">
          
                  <div class="rrow">
                    <div class="ccol-50">
                      <h3>Billing Address</h3>
                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="John Doe">
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="johndoe123@gmail.com">
                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                      <input type="text" id="adr" name="address">
                      <label for="city"><i class="fa fa-institution"></i> City</label>
                      <input type="text" id="city" name="city" placeholder="Eg. Mumbai">
          
                      <div class="rrow">
                        <div class="ccol-50">
                          <label for="state">State</label>
                          <input type="text" id="state" name="state" placeholder="Eg. Maharashtra">
                        </div>
                        <div class="ccol-50">
                          <label for="zip">Zip</label>
                          <input type="text" id="zip" name="zip" placeholder="421201">
                        </div>
                      </div>
                    </div>
          
                    <div class="ccol-50">
                      <h3>Payment</h3>
                      <label for="fname">Accepted Cards</label>
                      <div class="icon-container">
                        <i class="bx bxl-visa bx-tada" style="color:rgb(114, 114, 229);" ></i>
                        <i class="bx bxs-credit-card bx-tada" style="color:blue;"></i>
                        <i class="bx bxl-mastercard bx-tada" style="color:red;"></i>
                      </div>
                      <label for="cname">Name on Card</label>
                      <input type="text" id="cname" name="cardname" placeholder="John Doe">
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="XXXX XXXX XXXX XXXX">
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="September">
          
                      <div class="rrow">
                        <div class="ccol-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="ccol-50">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                      </div>
                    </div>
          
                  </div>
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label>
                  <input type="submit" value="Continue to checkout" class="btn">
                </form>
              </div>
            </div>
          </div>
    </header>
    <footer class="footer">
        <div class="row">
          <div class="col d-flex">
            <h4>INFORMATION</h4>
            <a href="">About us</a>
            <a href="">Contact Us</a>
            <a href="">Term & Conditions</a>
            <a href="">Shipping Guide</a>
          </div>
          <div class="col d-flex">
            <h4>USEFUL LINK</h4>
            <a href="">Online Store</a>
            <a href="">Customer Services</a>
            <a href="">Promotion</a>
            <a href="">Top Brands</a>
          </div>
          <div class="col d-flex">
            <span><i class="bx bxl-facebook-square"></i></span>
            <span><i class="bx bxl-instagram-alt"></i></span>
            <span><i class="bx bxl-github"></i></span>
            <span><i class="bx bxl-twitter"></i></span>
            <span><i class="bx bxl-pinterest"></i></span>
          </div>
        </div>
      </footer>
</body>        