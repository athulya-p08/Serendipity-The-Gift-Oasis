<?php
session_start();
$suname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>My Orders</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color:rgb(238, 201, 245);
    }
    .container {
      width: 80%;
      margin: 20px auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
    }
    table th, table td {
      padding: 10px;
      border: 1px solid #070707;
      text-align: center;
    }
    table th {
      background-color: rgb(64, 13, 74);
      color: white;
    }
    .status {
      color: green;
      font-weight: bold;
    }
    .empty-message {
      text-align: center;
      font-size: 18px;
      color: #555;
      margin-top: 50px;
    }
    .top-nav, .navigation {
      background: rgb(90, 8, 106);
      padding: 10px 0;
    }
    .top-nav ul, .navigation .nav-list {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
      justify-content: center;
    }
    .top-nav ul li, .navigation .nav-list li {
      margin: 0 15px;
    }
    .top-nav ul li a, .navigation .nav-list li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

<header>
  <div class="top-nav">
    <ul>
      <li>
        <?php if (empty($suname)) { ?>
          <a href="login.html">Click to login</a>
        <?php } else { ?>
          <h3><span style="color:white">Welcome: <?php echo htmlspecialchars($suname); ?></span></h3>
        <?php } ?>
      </li>
      <li><a href="logout.php">Log Out</a></li>
      
      <li><a href="contact.php">FAQ</a></li>
     
    </ul>
  </div>
  <div class="navigation">
    <ul class="nav-list">
      <li><a href="index.php">Home</a></li>
      <li><a href="categories.php">Categories</a></li>
      <li><a href="terms.html">Terms</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</header>

<div class="container">
  <h1>My Orders</h1>
  <table id="orders-table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Gift Message</th>
        <th>Gift Wrapping</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody id="order-items">
      <!-- Orders will be inserted here dynamically -->
    </tbody>
  </table>
  <p id="empty-orders-message" class="empty-message" style="display: none;">You have no processed orders.</p>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let orders = JSON.parse(localStorage.getItem("processedItems")) || [];
    let ordersTable = document.getElementById("orders-table");
    let orderItems = document.getElementById("order-items");
    let emptyMessage = document.getElementById("empty-orders-message");

    if (orders.length === 0) {
        emptyMessage.style.display = "block";
        ordersTable.style.display = "none";
    } else {
        emptyMessage.style.display = "none";
        ordersTable.style.display = "table";

        orderItems.innerHTML = orders.map(item => {
            let total = item.price * item.quantity;
            return `
            <tr>
                <td><img src="${item.image}" alt="${item.name}" style="width: 80px; height: 80px; border-radius: 5px;"></td>
                <td>${item.name}</td>
                <td>Rs. ${item.price}</td>
                <td>${item.quantity}</td>
                <td>Rs. ${total}</td>
                <td>${item.giftMessage || "None"}</td>
                <td>${item.giftWrapping || "No"}</td>
                <td class="status">Processed Successfully</td>
            </tr>
            `;
        }).join("");
    }
});
</script>

</body>
</html>
