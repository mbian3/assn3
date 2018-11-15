<!-- Skeleton code from workshop -->

<?php
     include 'connectdb.php';
     $custID = $_POST["ID"];
     $query2 = 'SELECT * FROM customer where customerID = "' . $custID . '"';
     if (mysqli_num_rows(mysqli_query($connection,$query2)) == 0) {
         die("database query failed, customer ID not found");
     }
     $query = 'Delete FROM customer where customerID = "' . $custID . '"';
     $result = mysqli_query($connection,$query);
     if (!$result) {
         die("database query failed, customer ID not found.");
     }
     echo "<h3> delete successfull <h3>";
?>
