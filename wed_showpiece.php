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
    <title>Couple Showpiece</title>
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

    <!-- Product Details -->
    <section class="section product-detail">
      <div class="details container">
        <div class="left image-container">
          <div class="main">
            <img src="./images/wed showpiece.jpeg" id="zoom" alt="" />
          </div>
        </div>
        <div class="right">
          <span><h4>Couple Showpiece</h4></span>
          <h1>Cute Mini Showpiece</h1>
          <div class="price">Rs.499</div>

          <form class="form">
            <a class="cart button" onclick="addToCart('Cute Mini Showpiece',499,document.getElementById('quantity').value)">Add To Cart</a>

            <a class="button wishlist-btn" onclick="addToWishlist('Cute Mini Showpiece',499)">Add to wishlist</a>
          <h3>Product Detail</h3>
          <p>
            <h2>Couple Showpiece</h2> 
            <br>
            <h4> Celebrate your love story with our "love forever love" couple showpiece.<br> This beuatifully crafted figurine is a hearfelt representation of deep love and commitment.</p>
            <br><br>
        Size:Default<br> Material:Ceramic <br> Suitable for:Anniversary,wedding,valentines day <br> Speciality:Exquisite craftsmanship,romantic symbolism</h4>
          
          <br>
          <br>

          
        </div>
        <div class="gift-wrapping-option"> 
          <label><b>Gift Wrapping:</b></label><br> 
          <input type="radio" id="yes-gift-wrapping" name="gift-wrapping" value="yes"> 
          <label for="yes-gift-wrapping">Yes</label> 
          <input type="radio" id="no-gift-wrapping" name="gift-wrapping" value="no"> 
          <label for="no-gift-wrapping">No</label> 
        </div>
        <div class="quantity-selection"> 
        
          <p><span>Quantity:</span>
            <select id="quantity">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </p>
      </div>
        <div class="gift-message"> 
          <label for="gift-message">Gift Message:</label> 
          <textarea id="gift-message" name="gift-message" placeholder="Convey your message here"></textarea> 
        </div>
       
        
        </form>
      </div>
    </section>

    <!-- Related -->
    <section class="section featured">
      <div class="top container">
        <h1>Related Products Coming Soon....</h1>

      </div>
      <div class="product-center container">
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/wed_showpiece1.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Couple Showpiece</span>
            <a href="">Showpiece with a mini snow globe</a>
            <h4>Rs.499</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/wed_showpiece2.jpeg" alt="" />
            </a>
          
          </div>
          <div class="product-info">
            <span>Couple Showpiece</span>
            <a href="">Couple embracing showpiece</a>
            <h4>Rs.699</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/wed_showpiece3.jpeg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Couple Showpiece</span>
            <a href="">Love forever showpiece</a>
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
              <img src="./images/wed_showpiece4.jpeg" alt="" />
            </a>
            
          </div>
          <div class="product-info">
            <span>Couple Showpiece</span>
            <a href="">Couple showpiece</a>
            <h4>Rs.499</h4>
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
        </div>

        <div class="col d-flex">
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-twitter"></i></span>

        </div>
      </div>
    </footer>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.0.min.js"
      integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
      crossorigin="anonymous"
    ></script>
    <script src="./js/zoomsl.min.js"></script>
    <script>
      $(function () {
        console.log("hello");
        $("#zoom").imagezoomsl({
          zoomrange: [4, 4],
        });
      });
    </script>

<script>
  function addToCart(name, price, quantity) {
    const image = "./images/wed showpiece.jpeg"; // Replace this with the actual image path or dynamically fetch it
    const giftMessage = document.getElementById('gift-message').value.trim();
    const giftWrapping = document.querySelector('input[name="gift-wrapping"]:checked') ? document.querySelector('input[name="gift-wrapping"]:checked').value : "No need";

    // Default values if no input is given
    const finalGiftMessage = giftMessage !== "" ? giftMessage : "No need";
    const finalGiftWrapping = giftWrapping !== "" ? giftWrapping : "No need";

    const newProduct = { name, price, quantity: parseInt(quantity), image, giftMessage: finalGiftMessage, giftWrapping: finalGiftWrapping };

    let cart = JSON.parse(localStorage.getItem("cartItems")) || [];

    const existingProductIndex = cart.findIndex(item => item.name === name);
    if (existingProductIndex > -1) {
        cart[existingProductIndex].quantity += newProduct.quantity;
    } else {
        cart.push(newProduct);
    }

    localStorage.setItem("cartItems", JSON.stringify(cart));
    console.log("Cart updated in localStorage:", cart); // Verify the cart here

    window.location.href = "cart.php";
}
</script>

<script>
  function addToWishlist(name, price) {
    const image = "./images/wed showpiece.jpeg"; // Replace this with the actual image path or dynamically fetch it
    const newProduct = { name, price, image };

    let wishlist = JSON.parse(localStorage.getItem("wishlistItems")) || [];

    // Check if the product is already in the wishlist
    const existingProductIndex = wishlist.findIndex(item => item.name === name);
    if (existingProductIndex > -1) {
        alert("This item is already in your wishlist.");
    } else {
        wishlist.push(newProduct);
        localStorage.setItem("wishlistItems", JSON.stringify(wishlist));
        console.log("Wishlist updated in localStorage:", wishlist); // Verify the wishlist here
        alert("Item added to your wishlist!");
    }
}

</script>

<script>
  function updateWishlistCount() {
    const wishlist = JSON.parse(localStorage.getItem("wishlistItems")) || [];
    document.querySelector(".bx-heart span").textContent = wishlist.length;
}

// Call the function to update the count on page load
updateWishlistCount();

</script>

<style>
.button {
display: inline-block;
padding: 10px 20px;
font-size: 16px;
font-weight: bold;
text-align: center;
color: white;
background-color: #460343;
border: none;
border-radius: 5px;
cursor: pointer;
text-decoration: none;
transition: background-color 0.3s ease;
}

.button:hover {
background-color: #0056b3;
}

.button:active {
background-color: #003f8a;
}
</style>

  </body>
</html>
