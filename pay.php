<?php
require 'Instamojo.php'; // Include the Instamojo PHP SDK

// Your Instamojo credentials
$api_key = "bdad1243037a441911e5807a697df856"; // Replace with your Instamojo API Key
$auth_token = "3762ba6be754a59c64789ce7e10a8f2e"; // Replace with your Instamojo Auth Token

// Initialize Instamojo API
$api = new Instamojo\Instamojo($api_key, $auth_token, 'https://www.instamojo.com/api/1.1/');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    try {
        // Create a payment request
        $response = $api->paymentRequestCreate([
            "purpose" => "Gift Purchase",
            "amount" => $amount,
            "buyer_name" => $name,
            "email" => $email,
            "phone" => $phone,
            "redirect_url" => "payment_success.php" // Replace with your success page URL
        ]);

        // Redirect to Instamojo payment URL
        header("Location: " . $response['longurl']);
        exit;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Payment</title>
</head>
<body>
    <h1>Make a Payment</h1>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>

        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
