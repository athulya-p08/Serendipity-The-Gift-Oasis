<?php

?>

<div class="container text-white">
    <h2 class='text-center text-white'>My Wishlist</h2>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <h3>Recent Orders</h3>
        <br>
        <table class="cart-table account-table table table-bordered bg-white text-dark">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $c_id=$_SESSION['customerid'];
                $sql="SELECT * FROM wishlist WHERE uid='$c_id'";
                $result=mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0) {
                    while($row=mysqli_fetch_assoc($result)) {

                  //  }
                //}
                ?>
                    <tr>
                        <td>
                            <?php echo $row["pid"]
                            ?>
                        </td>
                        <td>
                        <?php echo $row["pid"]
                            ?>
                        </td>
                        <td>
                        <?php echo $row["timestamp"]
                            ?>
                        </td>
                        <td>
                            <?php echo date('M j g:i A',strtotime($row["timestamp"]));
                            ?>
                        </td>
                        <td>
                            <a href="view-order.php?id=<?php echo $row["id"]?>">View</a>
                        </td>
                    </tr>
                    