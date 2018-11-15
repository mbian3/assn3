<!-- Skeleton code from workshop -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Purchase History</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>This Customer's Purchase History:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customer"];
   $query = 'SELECT * FROM customer, purchase, product WHERE purchase.custID=customer.customerID AND purchase.prodID = product.productID AND customer.customerID = "' . $whichCustomer . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
