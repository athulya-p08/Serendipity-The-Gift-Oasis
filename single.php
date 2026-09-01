<?php include("inc/header.php");  ?>

<?php include("inc/nav.php");

include("config/db.php");
$message='';

if(isset($_POST['submit'])){
    $product_id=$_GET['id'];
    $c_id=$_SESSION['customerid'];

    //$name = $_POST['name'];
    //$email = $_POST['email'];
    $review = $_POST['review'];

    $insertReview = "INSERT INTO reviews (pid,uid,review)
    VALUES ('$product_id','$c_id','$review')";

    if(mysqli_query($conn, $insertReview)){
        $message = 'Review Submitted';
    }
}

if(isset($_GET['id'])){
    $product_id = $_GET['id'];
    $sql="SELECT * FROM products WHERE product_id='$product_id'";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    $product_name=$row['product_name'];
    $cat_id=$row['cat_id'];
    $price=$row['price'];
    $product_description=$row['product_description'];
    $thumb=$row['thumb'];
}

?>