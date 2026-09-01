<?php
session_start(); // Start the session
if (!isset($_SESSION['uname'])) {
    header("Location: login.html"); // Redirect to login if session is not set
    exit();
}

$uname = $_SESSION['uname']; // Retrieve username from session
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eec5f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .profile-container h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .profile-detail {
            font-size: 18px;
            margin-bottom: 15px;
            color: #555;
        }
        .section {
            background: #5d145a;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
            text-align: center;
        }
        .section:hover {
            background: #48125a;
        }
        .logout-btn {
            background-color: #48125a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background-color: #5d145a;
        }
    </style>
</head>
<body>
    
    <div class="profile-container">
        <h2>My Profile</h2>
        <p class="profile-detail"><strong>Username:</strong> <?php echo $uname; ?></p>

        <div class="section" onclick="window.location.href='cart.php'">🛒 My Cart</div>
        <div class="section" onclick="window.location.href='wishlist.php'">❤️ My Wishlist</div>
        <div class="section" onclick="window.location.href='orders.php'">📦 My Orders</div>
        <div class="section" onclick="window.location.href='edit_profile.php'">✏️ Edit Profile</div>
        <div class="section" onclick="window.location.href='logout.php'">🚪 Logout</div>
    </div>

    <!-- <script>
        // Load user details from localStorage
        // Load user details from localStorage and display them
function loadProfile() {
    const storedUser = JSON.parse(localStorage.getItem('loggedInUser'));
    
    if (storedUser) {
        document.getElementById('profileUsername').innerText = storedUser.username;
        document.getElementById('profileEmail').innerText = storedUser.email || 'Not provided';
        document.getElementById('profilePhone').innerText = storedUser.age || 'Not provided';
    } else {
        alert('No user found. Redirecting to login.');
        window.location.href = 'login.html';
    }
}

// Logout function to clear localStorage and redirect to login page
function logout() {
    localStorage.removeItem('loggedInUser');
    alert('Logged out successfully!');
    window.location.href = 'login.html';
}

// Load profile on page load
window.onload = loadProfile;

    </script> -->
</body>
</html>
