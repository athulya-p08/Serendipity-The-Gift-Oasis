<?php 
session_start();
include("db_connect.php");

// Check if user is logged in
if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['uname'];
$msg = "";

// Fetch user details from the database
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    die("Error fetching user data: " . mysqli_error($conn));
}

// Handle form submission for profile update
if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate contact number (must be exactly 10 digits)
if (!preg_match('/^\d{10}$/', $contact)) {
    $msg = "Error: Contact number must be exactly 10 digits!";
} else {
    // Proceed with update if contact number is valid
    if (!empty($password)) { 
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $query = "UPDATE users SET username='$name', email='$email', contact='$contact', address='$address', password='$password' WHERE username='$username'";
    } else {
        $query = "UPDATE users SET username='$name', email='$email', contact='$contact', address='$address' WHERE username='$username'";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['uname'] = $name; // Update session username if changed
        echo "<script>
                alert('Profile updated successfully!');
                window.location.href='profile.php';
              </script>";
        exit();
    } else {
        $msg = "Error updating profile: " . mysqli_error($conn);
    }
}

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        /* Lavender-themed, elegant styling */
        body {
            background: linear-gradient(to right,rgb(246, 217, 255),rgb(223, 125, 247));
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            text-align: center;
            transition: box-shadow 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        /* Subtle glow effect on hover instead of blur */
        .profile-container:hover {
            box-shadow: 0px 10px 30px rgba(78, 17, 93, 0.4);
            transform: translateY(-5px);
        }

        h2 {
            color:rgb(64, 8, 85);
            margin-bottom: 15px;
            font-weight: 600;
        }

        p {
            font-size: 14px;
            color: green;
        }

        label {
            display: block;
            text-align: left;
            font-size: 16px;
            font-weight: 500;
            margin: 8px 0 3px;
            color:rgb(54, 3, 72);
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid rgb(50, 0, 75);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.4);
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border: 1px solid rgb(50, 0, 75);
            background: white;
        }

        button {
            background: rgb(150, 120, 190); /* Light lavender color for disabled state */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            cursor: not-allowed; /* Show disabled cursor */
            transition: 0.3s;
        }

        button:enabled {
            background: rgb(64, 8, 85); /* Dark lavender when enabled */
            cursor: pointer;
        }

        button:enabled:hover {
            background: rgb(101, 9, 113); /* Even darker shade on hover */
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color:rgb(37, 3, 52);
            text-decoration: none;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let contact = document.getElementById("contact").value.trim();
            let address = document.getElementById("address").value.trim();
            let contactError = document.getElementById("contactError");

            // Check if contact number is 10 digits
            if (!/^\d{10}$/.test(contact)) {
                contactError.textContent = "Contact number must be exactly 10 digits!";
                document.getElementById("updateBtn").disabled = true;
                return;
            } else {
                contactError.textContent = "";
            }

            // Enable button only if all fields are filled
            if (name && email && contact && address) {
                document.getElementById("updateBtn").disabled = false;
            } else {
                document.getElementById("updateBtn").disabled = true;
            }
        }

    </script>
</head>
<body>
    <div class="profile-container">
        <h2>Edit Profile</h2>
        <p><?php echo $msg; ?></p>

        <form action="" method="POST">
            <label>Username:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['username']); ?>" required onkeyup="validateForm()"><br><br>

            <label>Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required onkeyup="validateForm()"><br><br>

            <label>Contact:</label>
            <input type="text" id="contact" name="contact" value="<?php echo htmlspecialchars($user['contact'] ?? ''); ?>" required onkeyup="validateForm()">
            <span id="contactError" style="color: red; font-size: 12px;"></span><br><br>

            <label>Address:</label>
            <textarea id="address" name="address" required onkeyup="validateForm()"><?php echo htmlspecialchars($user['address'] ?? ''); ?></textarea><br><br>

            <label>New Password (Leave empty to keep current password):</label>
            <input type="password" id="password" name="password" onkeyup="validateForm()"><br><br>

            <button type="submit" id="updateBtn" name="update" disabled>Update Profile</button><br><br>
        </form>

        <a href="profile.php">Back to Profile</a>
    </div>
</body>
</html>
