<!-- Skeleton code from workshop -->
<?php
   $query = "SELECT * FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Select a viewing orientation </br>";
   echo '<input type="radio" name="product" value="1"> By Price and Descending<br>';
   echo '<input type="radio" name="product" value="2"> By Price and Ascending<br>';
   echo '<input type="radio" name="product" value="3"> By Description and Descending<br>';
   echo '<input type="radio" name="product" value="4"> By Description and Ascending<br>';
   mysqli_free_result($result);
?>




