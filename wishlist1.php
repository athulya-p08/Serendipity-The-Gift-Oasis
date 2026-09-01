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
    echo "Please log in to view your wishlist.";
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch wishlist items
$sql = "SELECT w.id as wishlist_id, p.id as product_id, p.name as product_name, p.price as product_price, p.image as product_image 
        FROM wishlist w
        INNER JOIN products p ON w.product_id = p.id
        WHERE w.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist</title>
    <style>
        .wishlist-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .wishlist-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .wishlist-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .wishlist-item button {
            padding: 5px 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="wishlist-container">
        <h1>My Wishlist</h1>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="wishlist-item">
                    <div>
                        <img src="<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                    </div>
                    <div>
                        <h3><?php echo $row['product_name']; ?></h3>
                        <p>Price: $<?php echo $row['product_price']; ?></p>
                    </div>
                    <div>
                        <form method="POST" action="remove_from_wishlist.php">
                            <input type="hidden" name="wishlist_id" value="<?php echo $row['wishlist_id']; ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Your wishlist is empty!</p>
        <?php endif; ?>
    </div>
</body>
</html>
