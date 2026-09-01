<?php 
include("db_connect.php");
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if username already exists
    $check_username = "SELECT * FROM `users` WHERE `username` = '$name'";
    $result_username = mysqli_query($conn, $check_username);

    // Check if password already exists
    $check_password = "SELECT * FROM `users` WHERE `password` = '$password'";
    $result_password = mysqli_query($conn, $check_password);

    if(mysqli_num_rows($result_username) > 0){
        // Username already exists
        echo "<script>
                alert('Username already used! Please choose a different username.');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
    else if(mysqli_num_rows($result_password) > 0){
        // Password already exists
        echo "<script>
                alert('Password already used! Please choose a different password.');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
    else {
        // Insert new user
        $query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
        $res = mysqli_query($conn, $query);

        if($res){
            echo "<script>
                    alert('Registration successful! Please log in.');
                    window.location.href = 'login.html';
                  </script>";
            exit();
        } else {
            echo(mysqli_error($conn));
        }
    }
}

else if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    $username = $row['username'];
    $count = mysqli_num_rows($res);

    if($count === 1){
        $_SESSION['uname'] = $username;
        header('Location: index.php');
        exit();
    } else {
        echo "<script>
                alert('Invalid login credentials! Please try again.');
                window.location.href = 'login.html';
              </script>";
    }
}
?>
