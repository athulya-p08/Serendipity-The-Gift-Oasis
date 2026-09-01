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
  <title>Shopping Cart</title>
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
      justify-content: space-between;
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
    .total {
      text-align: right;
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
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
    .empty-cart {
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
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="categories.html" class="nav-link">Categories</a>
            
          </li>
          <li class="nav-item">
          <a href="terms.html" class="nav-link">Terms</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>

        <div class="icons d-flex" style="color: black;">
          <a href="profile.php" class="icon">
            <i class="bx bx-user"></i>
          </a>
          <a href="search.html" class="icon">
            <i class="bx bx-search"></i>
          </a>
          <a href="wishlist.html" class="icon">
            <i class="bx bx-heart"></i>
          </a>
          <a href="cart.html" class="icon">
            <i class="bx bx-cart"></i>
          </a>
          
        </div>

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>
  <div class="container">
    <h1>Your Cart</h1>
    <table>
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="cart-items">
        <!-- Cart items will be dynamically added here -->
      </tbody>
    </table>
    <p class="total">Total: Rs. <span id="grand-total">0</span></p>
    <div class="actions" id="cart-actions">
      <a href="categories.php">Continue Shopping</a>
      <a href="#" id="checkoutButton">Proceed to Checkout</a>
    </div>
    <p id="empty-cart-message" class="empty-cart" style="display: none; text-align: center; margin-top: 20px;">Your cart is empty.</p>
  </div>

  <script>
  // Simulate cart data (can be replaced with dynamic data)
  let product = JSON.parse(localStorage.getItem("cartItem")) || [];

  // Calculate total price
  const calculateTotal = () => {
    if (!product) return 0;
    const totalPrice = product.price * product.quantity;
    document.getElementById("grand-total").textContent = totalPrice;
    return totalPrice;
  };

  // Render cart items
  const renderCart = () => {
    const cart = JSON.parse(localStorage.getItem("cartItems")) || [];
    const cartItems = document.getElementById("cart-items");
    const emptyMessage = document.getElementById("empty-cart-message");
    const cartActions = document.getElementById("cart-actions");
    const grandTotalElem = document.getElementById("grand-total");

    if (cart.length===0) {
      emptyMessage.style.display = "block";
      cartItems.innerHTML = "";
      cartActions.style.display = "none";
      grandTotalElem.textContent = "0";
      return;
    }

    emptyMessage.style.display = "none";
    cartActions.style.display = "flex";

    const productImageSrc = product.image; // Example image source (adjust dynamically as needed)

    let grandTotal = 0;

    cartItems.innerHTML = cart.map((product, index) => {
        const total = product.price * product.quantity;
        grandTotal += total;

        return `
      <tr>
        <td><img src="${product.image}" alt="${product.name}" class="product-image"></td>
        <td>${product.name}</td>
        <td>Rs. ${product.price}</td>
        <td>
          <input 
            type="number" 
            value="${product.quantity}" 
            min="1" 
            class="quantity-input"
            data-index="${index}" 
            style="width: 60px; text-align: center;">
        </td>
        <td>Rs. <span>${total}</span></td>
         <td>
            <button class="remove-btn" data-index="${index}">Remove</button>
          </td>
      </tr>
    `;
  }).join("");

  grandTotalElem.textContent = grandTotal;
};

  // Event listener for quantity change
  document.addEventListener("input", (e) => {
    if (e.target.classList.contains("quantity-input")) {
      const index = parseInt(e.target.getAttribute("data-index"));
      const newQuantity = parseInt(e.target.value);
      let cart = JSON.parse(localStorage.getItem("cartItems")) || [];

      if (newQuantity < 1) {
            cart.splice(index, 1); // Remove the product if quantity is less than 1
        } else {
            cart[index].quantity = newQuantity; // Update quantity
        }

        localStorage.setItem("cartItems", JSON.stringify(cart));
        renderCart();
    }
});

  // Event listener for remove button
  // Event listener for remove button
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("remove-btn")) {
    // Get the index of the product to remove
    const index = e.target.getAttribute("data-index");

    // Get the current cart from localStorage
    let cart = JSON.parse(localStorage.getItem("cartItems")) || [];

    // Remove the item at the given index
    cart.splice(index, 1);

    // Save the updated cart back to localStorage
    localStorage.setItem("cartItems", JSON.stringify(cart));

    // Re-render the cart
    renderCart();
  }
});


  // Initialize cart
  renderCart();
</script>

<script>
  document.getElementById("checkoutButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default action of the link
    let cart = JSON.parse(localStorage.getItem("cartItems")) || [];
    if (cart.length === 0) return;

    let summary = cart.map(item => `${item.name} (x${item.quantity}) - Rs. ${item.price * item.quantity}`).join("\n");
    let totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0).toString();

    let confirmMessage = `Order Summary:\n\n${summary}\n\nTotal: Rs. ${totalAmount}\n\n>Proceed to Payment?`;

    if (confirm(confirmMessage)) {

      // Encode data for URL
      let encodedSummary = encodeURIComponent(summary);
        let encodedTotal = encodeURIComponent(totalAmount);

        // Replace 'XXXXXXXXX' with actual Google Form entry IDs
        let googleFormURL = `https://docs.google.com/forms/d/e/1FAIpQLSeUAwSRANMRcAXFMAhSThmTd5mp0IlZstDw9Y7fsDNl5gC3WA/formResponse?entry.654750639=${encodedSummary}&entry.929584104=${encodedTotal}`;

        window.location.href = googleFormURL;
    }
});

</script>

</body>
</html>
