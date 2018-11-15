<!-- Skeleton code from workshop -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New Customer</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Customer:</h1>
<ol>
<?php
   $custID= $_POST["ID"];
   $FName = $_POST["fname"];
   $LName =$_POST["lname"];
   $city =$_POST["city"];
   $phone =$_POST["phone"];
   $aID =$_POST["aID"];
   $query = 'INSERT INTO customer values("' . $custID . '","' . $FName . '","' . $LName . '","' . $city .'","' .$phone .'","' . $aID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed (Either a customer ID is already in use, no agent ID exists, or the input exceeds maxiumum allowed or minimum necessary.  ". mysqli_error($connection));
    }
   else{
      echo "Your customer was added!";
   }
   mysqli_close($connection);
?>
</ol>
</body>
</html>
