<?php
session_start();
$suname= $_SESSION['uname']; //make .htaccess file to disable the warnings



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Wishlist</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 80%;
      margin: 20px auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table th, table td {
      padding: 10px;
      border: 1px solid #070707;
      text-align: center;
    }
    table th {
      background-color: rgb(64, 13, 74);
    }
    .actions {
      margin-top: 20px;
      display: flex;
      justify-content: center;
    }
    .actions a {
      text-decoration: none;
      background-color: rgb(64, 13, 74);
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .actions a:hover {
      background-color: #530b5e;
    }
    .empty-wishlist {
      text-align: center;
      font-size: 20px;
      color: #555;
      margin-top: 50px;
    }
    .product-image {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 5px;
    }
    .remove-btn {
      background-color: #6e096b;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 5px;
    }
    .remove-btn:hover {
      background-color: #421240;
    }
  </style>
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
  <div class="container">
    <h1>Your Wishlist</h1>
    <table>
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="wishlist-items">
        <!-- Wishlist items will be dynamically added here -->
      </tbody>
    </table>
    <div class="actions">
      <a href="categories.html">Continue Shopping</a>
    </div>
    <p id="empty-wishlist-message" class="empty-wishlist" style="display: none;">Your wishlist is empty.</p>
  </div>
<div id="wishlist-items"></div>
  <script>
    // Fetch wishlist data from localStorage
    const renderWishlist = () => {
      const wishlist = JSON.parse(localStorage.getItem("wishlistItems")) || [];
      const wishlistItems = document.getElementById("wishlist-items");
      const emptyMessage = document.getElementById("empty-wishlist-message");

      if (wishlist.length === 0) {
        emptyMessage.style.display = "block";
        wishlistItems.innerHTML = "";
        return;
      }

      emptyMessage.style.display = "none";

      wishlistItems.innerHTML = wishlist.map((product, index) => {
        return `
          <tr>
            <td><img src="${product.image}" alt="${product.name}" class="product-image"></td>
            <td>${product.name}</td>
            <td>Rs. ${product.price}</td>
            <td>
              <button class="remove-btn" data-index="${index}">Remove</button>
            </td>
          </tr>
        `;
      }).join("");
    };

    // Event listener for removing items from the wishlist
    document.addEventListener("click", (e) => {
      if (e.target.classList.contains("remove-btn")) {
        const index = e.target.getAttribute("data-index");

        let wishlist = JSON.parse(localStorage.getItem("wishlistItems")) || [];
        wishlist.splice(index, 1);

        localStorage.setItem("wishlistItems", JSON.stringify(wishlist));
        renderWishlist();
      }
    });

    // Initialize wishlist
    renderWishlist();
  </script>
</body>
</html>