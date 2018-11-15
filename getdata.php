<!-- Skeleton code from workshop -->
<?php
   $query = "SELECT * FROM customer ORDER BY LName";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Select a customer to display their purchased items </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["customerID"];
        echo '">' . $row["FName"] . " " . $row["LName"] . "<br>";
   }
   mysqli_free_result($result);
?>





