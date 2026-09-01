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
  <link rel="stylesheet" href="./css/contact.css">

  <title>E-commerce Website - Contact</title>

  <style>
    /* Page Enhancements */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }

    /* General Enhancements */
.bgc {
  background: linear-gradient(135deg, #da6cf9, #ddbfe3);
  color: #333;
  padding: 3rem 0;
  text-align: center;
}

.container9 {
  max-width: 1000px;
  margin: auto;
  padding: 1.5rem;
}

/* Google Form Styling */
.contact-form-container {
  width: 100%;
  max-width: 700px;
  margin: auto;
  background:rgb(224, 183, 235);
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.contact-form-container iframe {
  width: 100%;
  height: 500px;
  border: none;
  border-radius: 12px;
}

/* Developer Info Container */
.details {
  background: #e8c5eb;
  padding: 2rem;
  border-radius: 16px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  text-align: center;
  max-width: 600px; /* Increased width for balance */
  margin: 2rem auto 0;
}

/* Title Styling */
.details h3 {
  color: #4e1758;
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Support Info */
.support-info {
  font-size: 1rem;
  color: #6b306e;
  font-weight: 500;
  margin-bottom: 20px;
}

/* Developer Cards */
.developer-cards {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  width: 100%; /* Take full width of the container */
}

/* Individual Developer Card */
.developer {
  background: white;
  padding: 15px;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 80%; /* Increased width */
  max-width: 350px; /* Keeps it proportional */
  transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.developer:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Developer Name */
.developer p {
  font-size: 1.2rem;
  font-weight: bold;
  color: #631378;
  margin-bottom: 4px;
}

/* Email Styling */
.developer a {
  color: #631378;
  font-size: 1rem;
  text-decoration: none;
  display: block;
  word-break: break-word;
  font-weight: 500;
}

.developer a:hover {
  text-decoration: underline;
  color: #4e1758;
}




/* Responsive Design */
@media (max-width: 768px) {
  .developer-cards {
    flex-direction: column;
    align-items: center;
  }
}

  </style>
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
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="categories.php" class="nav-link">Shop</a></li>
          <li class="nav-item"><a href="terms.html" class="nav-link">Terms</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>

        <div class="icons d-flex">
          <a href="profile.php" class="icon"><i class="bx bx-user"></i></a>
          <a href="search.html" class="icon"><i class="bx bx-search"></i></a>
          <a href="wishlist.php" class="icon"><i class="bx bx-heart"></i></a>
          <a href="cart.php" class="icon"><i class="bx bx-cart"></i></a>
          <a href="logout.php" class="icon"><i class="bx bx-log-out"></i></a>
        </div>
      </div>
    </div>

    <div class="bgc">
  <div class="container9">
    <h1 style="font-size: 50px; text-align: center; color: #333;">Get in Touch with Us</h1>

    <!-- Contact Form Section -->
    <div class="contact-info">
      <div class="contact-form-container">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfOfcgiUXFO84xRqptpH-zbWTFZgIxSK4l6FeYEeyTW3T_S0g/viewform?embedded=true">
          Loading…
        </iframe>
      </div>
    </div>

    <!-- Developer Info Section -->
    <div class="details">
  <h3>Meet the Developers</h3>
  <p class="support-info">Support available: <strong>6 AM - 5 PM, Mon-Fri</strong></p>

  <div class="developer-cards">
    <div class="developer">
      <p><h4>Siddhi Sasidharan</h4></p>
      <p><a href="mailto:siddhi.sasidharan@gmail.com"><strong>siddhi.sasidharan@gmail.com</strong></a></p>
    </div>
    <div class="developer">
      <p><h4>Athulya Pradeepkumar</h4></p>
      <p><a href="mailto:athulya.pradeepkumar@gmail.com"><strong>athulya.pradeepkumar@gmail.com</strong></a></p>
    </div>
  </div>
</div>

  </div>
</div>

  </header>
</body>

</html>
