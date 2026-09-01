<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo htmlspecialchars($_SESSION['msg']); // Prevent XSS
    unset($_SESSION['msg']); // Clear message after displaying
}
?>
