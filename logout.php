<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Display message and redirect after 3 seconds
echo "<script>
        alert('Successfully logged out');
        window.location.href = 'index.php';
      </script>";
exit();
?>
