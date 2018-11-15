<!-- Skeleton code from workshop -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Purchases Greater Than</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Purchases Greater Than Amount Entered: </h1>
<ol>
<?php
   $count= $_POST["count"];
   $query = 'SELECT * FROM purchase, customer, product WHERE purchase.custID = customer.customerID AND purchase.prodID = product.productID AND quantityPurchased >' . $count;
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["FName"];
        echo " ";
        echo $row["LName"];
        echo " -- ";
        echo $row["description"];
        echo " x ";
        echo $row["quantityPurchased"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
