<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Products:</h1>
<ol>
<?php
   $whichselect= $_POST["product"];
   if($whichselect == 1){
      $query = 'SELECT description,cost FROM product ORDER BY cost DESC';
   }
   else if($whichselect == 2){
      $query = 'SELECT description,cost FROM product ORDER BY cost';
   }
   else if($whichselect == 3){
      $query = 'SELECT description,cost FROM product ORDER BY description DESC';
   }
   else if($whichselect == 4){
      $query = 'SELECT description,cost FROM product ORDER BY description';
   }
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
        echo " -- $";
        echo $row["cost"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

