<?php
session_start();
$suname= $_SESSION['uname']; //make .htaccess file to disable the warnings



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Birthday Category</title>
  </head>

  <body>
    <!-- Navigation -->
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
        <a href="index.php" class="logo"><h1>SERENDIPITY</h1></a>

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

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>

    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>BIRTHDAY GIFTS</h1>
        <form>
          <select id="sortOptions">
            <option value="default">Defualt Sorting</option>
            <option value="price">Sort By Price</option>
            <option value="name">Sort By Name</option>
           
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </form>
      </div>
      <div class="product-center container">
        <div class="product-item" data-price="249" data-name="White Birthday Themed Mug" onclick="document.location='bday_mug.php'">
          <div class="overlay">
            <a href="productDetails.html" class="product-thumb">
              <img src="./images/mug.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>Birthday Mug</span>
            <a href="productDetails.html">White Birthday Themed Mug</a>
            <h4>Rs.249</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" data-price="499" data-name="Aesthetic Bir Frame" onclick="document.location='bday_frame.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/frame.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>Birthday Frame</span>
            <a href="">Aesthetic Birthday Frame</a>
            <h4>Rs.499</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" data-price="399" data-name="KitKat Choco Hamper" onclick="document.location='bday_kitkat.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/choco hamp.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>Chocolate Hamper</span>
            <a href="">KitKat Choco Hamper</a>
            <h4>Rs.399</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        </div>
        <div class="product-center container">
        <div class="product-item" data-price="199" data-name="White-Golden Birthday Banner" onclick="document.location='bday_banner.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/bday banner.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Birthday Banner</span>
            <a href="">White-Golden Birthday Banner</a>
            <h4>Rs.199</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" data-price="249" data-name="White Pillow with Birthday Print" onclick="document.location='bday_pillow.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/bday pillow.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>Birthday Pillow</span>
            <a href="">White Pillow with Birthday Print</a>
            <h4>Rs.249</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item" data-price="99" data-name="Aesthetic Birthday Card" onclick="document.location='bday_greetcard.php'">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/bday greetcard.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Greeting Card</span>
            <a href="">Aesthetic Birthday Card</a>
            <h4>Rs.99</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        
      </div>
    </section>
   
    <!-- Footer -->
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
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-github"></i></span>
          <span><i class="bx bxl-twitter"></i></span>
          <span><i class="bx bxl-pinterest"></i></span>
        </div>
      </div>
    </footer>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script>
      document.getElementById('sortOptions').addEventListener('change', function () {
  const sortType = this.value; // Get selected sorting type
  const productContainer = document.querySelector('.product-center'); // Parent container
  const products = Array.from(productContainer.querySelectorAll('.product-item')); // Products array

  if (sortType === 'price') {
    // Sort by price (numerical)
    products.sort((a, b) => {
      return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
    });
  } else if (sortType === 'name') {
    // Sort by name (alphabetical)
    products.sort((a, b) => {
      return a.dataset.name.localeCompare(b.dataset.name);
    });
  } else if (sortType === 'default') {
    // Default order (reset to original DOM order)
    products.sort((a, b) => {
      return parseInt(a.dataset.originalOrder) - parseInt(b.dataset.originalOrder);
    });
  }

  // Clear the container and re-append sorted products
  productContainer.innerHTML = '';
  products.forEach((product) => productContainer.appendChild(product));
});

// Assign original order to preserve default sorting
document.querySelectorAll('.product-item').forEach((product, index) => {
  product.setAttribute('data-original-order', index);
});

    </script>
  </body>
</html>
