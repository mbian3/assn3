<!-- Skeleton code from workshop -->
<?php
   $query = "select distinct description from product, purchase where product.productID NOT IN (select prodID from purchase);";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "These are the unpurchased products: </br>";
   while ($row=mysqli_fetch_assoc($result)) {
       echo '<li>';
       echo $row["description"];
    }

   mysqli_free_result($result);
?>
