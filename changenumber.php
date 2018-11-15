<!-- Skeleton code from workshop -->


<?php
     include 'connectdb.php';
     $custID = $_POST["ID"];
     $query = 'SELECT phone FROM customer where customerID = "' . $custID . '"';
     $result = mysqli_query($connection,$query);
     if (mysqli_num_rows(mysqli_query($connection,$query)) == 0) { 
         die("database query failed, customer ID not found");
     }
     if (!$result) {
         die("database query failed, customer ID not found");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo '<h2>This is the current phone number: <h2>';
        echo $row["phone"];
     }
?>
<br>
<h1>What number would you like to change it to?<h1>
<form action="changeactualnumber.php"  method="post">
New Number: <input type="text" name="phonenumber"><br>
<?php
echo '<input type="hidden" name="hiddenvar" value= "' . $custID . '">';
?>
<input type="submit" value="Change Number">
</form>

