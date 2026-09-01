<?php
session_start();

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $product_name=$_POST['product_name'];
    $product_price=(float)$_POST['product_price'];
    $quantity=(int)$_POST['quantity'];
    $product_image=$_POST['product_image'];

    $total_price=$product_price*$quantity;

    $_SESSION['cart'][]=[
        'product_name'=>$product_name,
        'product_price'=>$product_price,
        'product_image'=>$product_image,
        'quantity'=>$quantity,
        'total_price'=>$total_price,
    ];
}

$cart_items=isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Shopping Cart</title>
</head>
<body>
  <div class="container">
    <h1>Your Cart</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Price (per item)</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($cart_items)): ?>
          <tr>
            <td colspan="4">Your cart is empty!</td>
          </tr>
        <?php else: ?>
          <?php foreach ($cart_items as $item): ?>
            <tr>
              <td><?php echo htmlspecialchars($item['product_name']); ?></td>
              <td>Rs. <?php echo number_format($item['product_price'], 2); ?></td>
              <td><?php echo $item['quantity']; ?></td>
              <td>Rs. <?php echo number_format($item['total_price'], 2); ?></td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
    <br>
    <a href="categories.php" class="button">Continue Shopping</a>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeUAwSRANMRcAXFMAhSThmTd5mp0IlZstDw9Y7fsDNl5gC3WA/viewform?usp=dialog" class="button">Proceed to Checkout</a>
  </div>
</body>
</html>