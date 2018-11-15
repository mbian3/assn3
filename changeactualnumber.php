<!-- Skeleton code from workshop -->
<?php
   include 'connectdb.php';
   $phonenumber = $_POST["phonenumber"];
   $ID = $_POST["hiddenvar"];
   $query = 'update customer set phone = "' . $phonenumber . '" where customerID = "' . $ID . '";'; 
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<h3>The customer's phone number has been updated <h3>";
?>

