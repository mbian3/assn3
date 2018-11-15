
<!-- Skeleton code from workshop -->

<?php
     include 'connectdb.php';
     $custID = $_POST["ID"];
     $productID = $_POST["prodID"];
     $quantity = $_POST["quantity"];
     $query2 = 'SELECT * FROM customer where customerID = "' . $custID . '"';
     $query3 = 'SELECT * FROM product where productID = "' . $productID . '"';
     if (mysqli_num_rows(mysqli_query($connection,$query2)) == 0) {
         die("database query failed, customer ID not found");
     }
     if (mysqli_num_rows(mysqli_query($connection,$query3)) == 0) {
         die("database query failed, product ID not found");
     }
     $query4 = 'SELECT * FROM purchase where custID = "' . $custID . '" AND prodID = "' . $productID . '"' ;
     if (mysqli_num_rows(mysqli_query($connection,$query4)) == 0) {
         $query5 = 'INSERT INTO purchase values("' . $custID . '","' . $productID . '","' . $quantity . '")';
         $result =  mysqli_query($connection,$query5);
         echo "<h3> new purchase added <h3>";
     }
     else{
         $query6 = 'UPDATE purchase set quantityPurchased=' . $quantity . ' where custID="' . $custID . '" AND prodID="' . $productID . '" AND quantityPurchased<'. $quantity;
       	 $result =  mysqli_query($connection,$query6);
         echo "<h3> purchase updated (if new quantity is greater) <h3>";
     }
?>

