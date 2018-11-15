<!-- Skeleton code from workshop -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Quantity Purchased of Product</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Quantity Purchased of Product: </h1>
<ol>
<?php
   $counter = 0;
   $cost = 0;
   $totalcost = 0;
   $description;
   $productID= $_POST["product"];
   $query = 'SELECT * FROM purchase, product WHERE purchase.prodID = product.productID AND purchase.prodID = "' . $productID . '"';
   $query2 = 'SELECT * FROM product WHERE  productID = "' . $productID . '"';
   $result=mysqli_query($connection,$query);
   $result2=mysqli_query($connection,$query2);
   if (mysqli_num_rows(mysqli_query($connection,$query2)) == 0) {
       die("database query failed, productID does not exist");
   }

   if (!$result) {
        die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
       $counter = $counter + $row["quantityPurchased"];
       $cost = $row["cost"];
       $description = $row["description"];
   }
   while ($row2=mysqli_fetch_assoc($result2)) {
       $description = $row2["description"];
   }
   $totalcost = $counter * $cost;
   echo $description;
   echo " -- ";
   echo $counter;
   echo " purchased -- $";
   echo $totalcost;
   echo " in sales";
   mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>





