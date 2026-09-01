<?php
require 'Instamojo.php'; // Include the Instamojo PHP SDK

// Your Instamojo credentials
$api_key = "bdad1243037a441911e5807a697df856"; // Replace with your Instamojo API Key
$auth_token = "3762ba6be754a59c64789ce7e10a8f2e"; // Replace with your Instamojo Auth Token

// Initialize Instamojo API
$api = new Instamojo\Instamojo($api_key, $auth_token, 'https://www.instamojo.com/api/1.1/');

// Get payment request ID and payment ID from URL
$payment_request_id = $_GET['payment_request_id'];
$payment_id = $_GET['payment_id'];

try {
    // Get payment details
    $response = $api->paymentRequestStatus($payment_request_id);

    if ($response['status'] === 'Completed') {
        echo "<h1>Payment Successful!</h1>";
        echo "<p>Payment ID: " . $payment_id . "</p>";
        echo "<p>Payment Request ID: " . $payment_request_id . "</p>";
        echo "<p>Thank you for your purchase!</p>";
    } else {
        echo "<h1>Payment Pending or Failed</h1>";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
