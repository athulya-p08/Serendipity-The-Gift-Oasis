<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gift_shop";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "Unauthorized access.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $wishlist_id = $_POST['wishlist_id'];

    // Delete the item from the wishlist
    $sql = "DELETE FROM wishlist WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $wishlist_id);

    if ($stmt->execute()) {
        header("Location: wishlist.php");
    } else {
        echo "Error removing item: " . $conn->error;
    }
}
?>
